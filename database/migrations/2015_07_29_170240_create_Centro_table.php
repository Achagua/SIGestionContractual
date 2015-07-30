<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centro', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('n_centro');
			$table->string('nombre_centro');
			$table->string('nombre_subdirector_centro');
			$table->string('direccion_centro');
			$table->string('telefono_centro');


			$table->integer('n_regional')->unsigned();

			$table->foreign('n_regional')
				  ->references('id')
				  ->on('regional')
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
		Schema::drop('centro');
	}

}
