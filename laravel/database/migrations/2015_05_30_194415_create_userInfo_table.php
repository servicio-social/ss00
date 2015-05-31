<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userInfo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cn')->unsigned();
			$table->foreign('cn')->references('cn')->on('users');
			$table->string('first_name');
			$table->string('last_name');
			$table->smallInteger('credits')->unsigned();
			$table->string('career');
			$table->string('plan');
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
		Schema::drop('userInfo');
	}

}
