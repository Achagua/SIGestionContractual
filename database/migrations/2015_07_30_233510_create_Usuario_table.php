<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('n_documento_usuario');
			$table->string('contraseña_usuario');
			$table->string('nombre_usuario');
			$table->string('apellido_usuario');
			$table->string('email_usuario')->unique();
			$table->string('rol_usuario');
			$table->string('estado');

			$table->integer('id_gestion_usuario')->unsigned();

			$table->foreign('id_gestion_usuario')
				  ->references('id')
				  ->on('gestion')
				  ->onDelete('cascade');

			$table->rememberToken();
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
		Schema::drop('usuario');
	}

}
