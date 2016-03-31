<?php namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Response;
use URL;

class ecomcontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cat=DB::select("select * from categories");


		return view('ecom.welcome1',compact('cat'));
	}

	public function display($id)
	{

		//$cat=DB::select("select * from sub_categories where cat_id IN (Select id from categories where name='?')",[1=>$id]);
    //    DB::select('select * from test where mid=? and created>? where id=5 group by type', [$member, $from] )
        $cat=DB::select("select * from categories");
		$sub_cat=DB::select("select * from sub_categories where cat_id IN (Select id from categories where name=:id)",array("id"=>$id));
		$subs=DB::select("select * from sub_subs");

		$res=DB::select("select * from images inner join products on images.prod_id=products.id group by prod_id");

		//dd($res);
		$pop=DB::select("select images.*,counts.* from images inner join counts on images.prod_id=counts.prod_id GROUP by images.prod_id order by count desc limit 5");
			 	//dd($pop);

		return view('ecom.categories',compact('cat','sub_cat','res','subs','pop'));
	}

	public function product($id)
	{
        $cat=DB::select("select * from categories");
		$product=DB::select("select * from products where name=:name",array("name"=>$id));
		$res=DB::select("select * from images where prod_id=:name",array("name"=>$product[0]->id));


		return view('ecom.product',compact('cat','product','res'));

	}

	public function buy(Request $request)
	{


		DB::update('update counts set count=count+1 where prod_id=:id',array("id"=>$request->id));
			return redirect()->route('/');
	}

	public function test()
	{
		$res=DB::select("select * from images inner join products on images.prod_id=products.id group by prod_id");
		//dd($res);
		$statuscode=200;
		return Response::json($res,$statuscode);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function search(Request $request)
	{
		//dd($request);
		$cat=DB::select("select * from categories");
		//$sub_cat=DB::select("select * from sub_categories where cat_id IN (Select id from categories where name=:id)",array("id"=>$id));
		$pop=DB::select("select images.*,counts.* from images inner join counts on images.prod_id=counts.prod_id GROUP by images.prod_id order by count desc limit 5");
		$res=DB::select("select * from images inner join products on images.prod_id=products.id group by prod_id having products.name like :id ",array("id"=>"%$request->text%"));
		$search=$request->text;
		//dd($res);
		//$res=DB::select("select * from products where name like :id ",array("id"=>"%$request->text%"));
		return view('ecom.test',compact('res','pop','cat','search'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
