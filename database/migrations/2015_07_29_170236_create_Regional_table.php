<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regional', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('n_regional');
			$table->string('zona_regional');
			$table->string('nombre_regional');
			$table->string('nombre_director_regional');
			$table->string('direccion_regional');
			$table->string('telefono_regional');
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
		Schema::drop('regional');
	}

}
