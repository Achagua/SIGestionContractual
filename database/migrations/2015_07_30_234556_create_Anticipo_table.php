<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnticipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anticipo', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->datetime('fecha_anticipo');
			$table->integer('id_control_pago')->unsigned();
			$table->string('descripcion_anticipo');
			$table->integer('valor_total_anticipo')->unsigned();
			$table->string('forma_pago');

			$table->foreign('id_control_pago')
				  ->references('id')
				  ->on('control_pago')
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
		Schema::drop('anticipo');
	}

}
