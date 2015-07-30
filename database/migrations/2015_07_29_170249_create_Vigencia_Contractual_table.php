<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVigenciaContractualTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vigencia_contractual', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('n_compromiso_siif');
			$table->datetime('fecha_n_compromiso_siif');
			$table->char('año_vigencia', 4);
			$table->datetime('fecha_inicio_vigencia');
			$table->datetime('fecha_terminacion_vigencia');
			$table->string('presupuesto_asignado_vigencia');


			$table->integer('n_centro')->unsigned();

			$table->foreign('n_centro')
				  ->references('id')
				  ->on('centro')
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
		Schema::drop('vigencia_contractual');
	}

}
