<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlPagoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('control_pago', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->integer('n_contrato')->unsigned();
			$table->integer('n_cuenta_bancaria')->unsigned();
			$table->integer('n_pago')->unsigned();
			$table->datetime('mes');
			$table->datetime('dia');
			$table->datetime('fecha_programada');
			$table->integer('valor_plan_pago')->unsigned();
			$table->integer('total_control_pago')->unsigned();
			
			$table->foreign('n_contrato')
				  ->references('id')
				  ->on('contrato')
				  ->onDelete('cascade');


			$table->foreign('n_cuenta_bancaria')
				  ->references('id')
				  ->on('cuenta_bancaria')
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
		Schema::drop('control_pago');
	}

}
