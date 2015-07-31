<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupervisorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supervisor', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('n_documento');
			$table->string('nombre_supervisor');
			$table->string('apellido_supervisor');
			$table->string('n_nit');

			$table->integer('id_gestion')->unsigned();

			$table->foreign('id_gestion')
				  ->references('id')
				  ->on('gestion')
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
		Schema::drop('supervisor');
	}

}
