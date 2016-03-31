<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\sub_categories;

class CreateSubSubsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_subs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('cat_id')->unsigned();
			$table->foreign('cat_id')
				->references('id')->on('sub_categories')
				->onDelete('cascade');
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
		Schema::drop('sub_subs');
	}

}
