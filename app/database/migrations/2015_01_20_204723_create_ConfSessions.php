<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfSessions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conf_sessions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('type')->references('id')->on('ConfSessionTypes');
			$table->string('title');
			$table->string('location');
			$table->string('facilitator');
			$table->string('description');
			$table->string('duration');
			$table->dateTime('start');
			$table->dateTime('end');
			$table->integer('seats');
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
		Schema::drop('conf_sessions');
	}

}
