<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionario', function(Blueprint $table)
		{
			$table->bigInteger('n_documento')->unique();
			$table->string('nombre');
			$table->string('Apellido');
			$table->string('ciudad_expedicion_documento');
			$table->date('fecha_expedicion_documento');
			$table->date('fecha_nacimiento');
			$table->char('genero', 1);
			$table->string('razon_social');
			$table->string('direccion');
			$table->string('telefono_fijo');
			$table->string('telefono_celular')->unique();
			$table->string('correo_electonico')->unique();
			$table->string('nacionalidad');
			$table->string('eps');
			$table->string('fondo_pensiones');
			$table->string('nivel_academico');
			$table->string('titulo_academico');
			$table->string('especializacion');
			$table->string('titulo_especializacion');
			$table->string('regimen_iva');
			$table->char('excluido_iva', 2);
			$table->char('declarante_renta', 2);
			$table->char('pensionado', 2);
			$table->string('proceso');
			$table->string('estado');
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
		Schema::drop('funcionario');
	}

}
