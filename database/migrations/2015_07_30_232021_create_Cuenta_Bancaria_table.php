<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentaBancariaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cuenta_bancaria', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->integer('n_cuenta_bancaria')->unique();
			$table->string('tipo_cuenta');
			$table->integer('id_banco')->unsigned();
			$table->integer('n_documento_funcionario')->unsigned();
			

			$table->foreign('n_documento_funcionario')
				  ->references('id')
				  ->on('funcionario')
				  ->onDelete('cascade');

			$table->foreign('id_banco')
				  ->references('id')
				  ->on('banco')
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
		Schema::drop('cuenta_bancaria');
	}

}
