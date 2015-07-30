<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coordinacion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_coordinacion');
			$table->string('nombre_lider_coordinacion');
			$table->string('telefono_coordinacion');
			$table->string('n_oficina_coordinacion');

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
		Schema::drop('coordinacion');
	}

}
