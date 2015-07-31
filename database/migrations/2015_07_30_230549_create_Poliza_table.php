<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolizaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('poliza', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->integer('n_contrato')->unsigned();
			$table->string('tipo_garantia');
			$table->string('riesgo_asegurado');
			$table->string('entidad_aseguradora');
			$table->datetime('fecha_vigencia_poliza');
			$table->datetime('fecha_terminacion_poliza');
			$table->datetime('fecha_aprobacion_poliza');
			$table->datetime('fecha_expedicion_poliza');
			$table->string('garantias_porcentaje_asegurado');
			$table->string('garantias_valor_asegurado');
			$table->string('tipo_seguimiento');
			$table->string('estado_poliza');

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
		Schema::drop('poliza');
	}

}
