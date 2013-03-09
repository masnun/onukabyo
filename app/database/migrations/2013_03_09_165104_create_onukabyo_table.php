<?php

use Illuminate\Database\Migrations\Migration;

class CreateOnukabyoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create Onukabyo table
		Schema::create('onukabyo', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->text('title');
			$table->text('content');


			// created_at and updated_at
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
		// Drop Onukabyo table
		Schema::drop('onukabyo');
	}

}