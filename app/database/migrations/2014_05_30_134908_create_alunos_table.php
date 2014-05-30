<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlunosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alunos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->integer('idade');
			$table->integer('serie');
			$table->integer('codigo');
			$table->string('senha');
			$table->boolean('status');
			$table->text('obs');
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
		Schema::drop('alunos');
	}

}