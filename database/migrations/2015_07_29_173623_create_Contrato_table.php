<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contrato', function(Blueprint $table)
		{
			$table->bigInteger('n_contrato')->unique();
			$table->datetime('fecha_inscripcion_contrato');
			$table->biginteger('id_autorizacion_contrato')->unsigned();
			$table->integer('id_vigencia_contractual')->unsigned();
			$table->integer('id_coordinacion')->unsigned();
			$table->integer('n_documento_funcionario')->unsigned();
			$table->datetime('fecha_inicio');
			$table->datetime('fecha_fin');
			$table->datetime('fecha_liquidacion');
			$table->string('area_funcionario');
			$table->string('cargo_funcionario');
			$table->string('objeto_contrato');
			$table->string('tipo_labor');
			$table->string('modo_seleccion');
			$table->string('calidad_psp');
			$table->string('clase_contrato');
			$table->bigInteger('codigo_secop');
			$table->string('nombre_codigo_secop');
			$table->bigInteger('valor_inicial_contrato');
			$table->bigInteger('valor_total_contrato');
			$table->char('recurso_contrato_convenio_interactivo', 2);
			$table->char('ejecucion_otro_municipio', 2);
			$table->string('estado_contrato');

			$table->foreign('id_vigencia_contractual')
				  ->references('id')
				  ->on('vigencia_contractual')
				  ->onDelete('cascade');

			$table->foreign('id_coordinacion')
				  ->references('id')
				  ->on('coordinacion')
				  ->onDelete('cascade');

			$table->foreign('n_documento_funcionario')
				  ->references('id')
				  ->on('funcionario')
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
		Schema::drop('contrato');
	}

}
