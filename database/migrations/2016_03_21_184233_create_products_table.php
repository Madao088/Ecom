<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\sub_sub;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('price');
			$table->string('description');
			$table->integer('sale');
			$table->integer('sub_cat_id')->unsigned();
			$table->foreign('sub_cat_id')
				->references('id')->on('sub_subs')
				->onDelete('cascade');
			$table->integer('count')->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
