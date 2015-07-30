<?php 

use Illuminate\Database\Seeder;

class ContratoTableSeeder extends Seeder
{	
	public function run()
	{
		\DB::table('Contrato')->insertGetId(array (

			'n_contrato' => '123456789';
			'fecha_inscripcion_contrato' => '2015/07/30';
			'id_autorizacion_contrato' => '987654321';
			'id_vigencia_contractual' => '123456';
			'id_coordinacion' => '654987';
			'n_documento_funcionario' => '97091407047';
			'fecha_inicio' => '2015/08/01';
			'fecha_fin' => '2016/12/01';
			'fecha_liquidacion' => '2016/12/05';
			'area_funcionario' => 'instructor';
			'cargo_funcionario' => 'php';
			'objeto_contrato' => 'falta instructor';
			'tipo_labor' => 'profesor';
			'modo_seleccion' => 'unica';
			'calidad_psp' => '1';
			'clase_contrato' => '2';
			'codigo_secop' => '3';
			'nombre_codigo_secop' => 'no se';
			'valor_inicial_contrato' => '100000000';
			'valor_total_contrato' => '110000000';
			'recurso_contrato_convenio_interactivo' => '5';
			'ejecucion_otro_municipio' => 'no';
			'estado_contrato' => '1';

		));
	}
}