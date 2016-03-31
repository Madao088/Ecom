<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',
[
	'as'=>'/',
	'uses'=>'ecomcontroller@index'
]);

Route::get('home', 'HomeController@index');

Route::get('add', function()
{
return view('topics.add');
}
);

Route::post('search',
	[
		'as'=>'search',
		'uses'=>'ecomcontroller@search'
	]);

Route::post('buy',
[
	'as'=>'buy',
	'uses'=>'ecomcontroller@buy'
]);

Route::get('data','ecomcontroller@test');

Route::get('test',function()
{
	return view('ecom.test');
});

Route::get('categories/{id}',
[
	'as'=>'categories',
	'uses'=>'ecomcontroller@display',
]
);

Route::get('product/{id}',
[
'as'=>'product',
'uses'=>'ecomcontroller@product'
]);
Route::get('/','ecomcontroller@index');

Route::get('show','ArticlesController@show');


Route::post('create', [
    'as' => 'create', 'uses' => 'ArticlesController@create'
]);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
