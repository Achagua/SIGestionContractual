<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdicionContractualTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adicion_contractual', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->datetime('fecha_adicion_contrato');
			$table->integer('n_contrato')->unsigned();
			$table->string('objeto_adicion');
			$table->integer('valor_adicion_contrato')->unsigned();

			$table->foreign('n_contrato')
				  ->references('id')
				  ->on('contrato')
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
		Schema::drop('adicion_contractual');
	}

}
