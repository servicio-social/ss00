<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocuemntosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documentos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cn')->unsigned();
			$table->foreign('cn')->references('cn')->on('userInfo');
			$table->smallInteger('formato')->unsigned();
			$table->string('comentario');
			$table->smallInteger('status')->unsigned();
			$table->string('nombre');
			$table->binary('archivo');
			$table->string('tipo');
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
		Schema::drop('documentos');
	}

}
