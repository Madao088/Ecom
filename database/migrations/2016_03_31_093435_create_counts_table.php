<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('counts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('prod_id')->unsigned();
			$table->foreign('prod_id')
				->references('id')->on('products')
				->onDelete('cascade');
			$table->integer('count');
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
		Schema::drop('counts');
	}

}
