<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCesionContratoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cesion_contrato', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->datetime('fecha_cesion_contrato');
			$table->integer('n_contrato')->unsigned();
			$table->string('objeto_cesion');
			


			$table->foreign('n_contrato')
				  ->references('id')
				  ->on('contrato')
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
		Schema::drop('cesion_contrato');
	}

}
