<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auditoria', function(Blueprint $table)
		{
			$table->increments('id');
			$table->datetime('fecha_movimiento');
			$table->string('accion');
			$table->string('tabla_accion');			
			$table->string('descripcion');

			$table->integer('n_documento_usuario')->unsigned();

			$table->foreign('n_documento_usuario')
				  ->references('id')
				  ->on('usuario')
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
		Schema::drop('auditoria');
	}

}
