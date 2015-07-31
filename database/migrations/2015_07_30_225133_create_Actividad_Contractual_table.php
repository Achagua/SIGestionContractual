<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadContractualTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actividad_contractual', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->integer('n_contrato')->unsigned();
			$table->string('tipo_actividad_contractual');
			$table->datetime('fecha_actividad_contractual');
			$table->string('objeto_actividad_contractual');

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
		Schema::drop('actividad_contractual');
	}

}
