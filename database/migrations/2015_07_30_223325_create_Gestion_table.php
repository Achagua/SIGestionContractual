<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gestion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_gestion');
			$table->integer('id_coordinacion')->unsigned();

			$table->foreign('id_coordinacion')
				  ->references('id')
				  ->on('coordinacion')
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
		Schema::drop('gestion');
	}

}
