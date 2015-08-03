<?php 
/*
use Illuminate\Database\Seeder;

class FuncionarioTableSeeder extends Seeder
{	
	public function run()
	{
		\DB::table('Funcionario')->insertGetId(array (

			'n_documento' => '97091407047',
			'nombre' => 'Alexis',
			'Apellido' => 'Achagua',
			'ciudad_expedicion_documento' => 'Bogota',
			'fecha_expedicion_documento' => '2014/02/16',
			'fecha_nacimiento' => '1997/09/14',
			'genero' => 'M',
			'razon_social' => 'd',
			'direccion' => 'dig 68',
			'telefono_fijo' => '7315782',
			'telefono_celular' => '',
			'correo_electonico' => '3125269640',
			'nacionalidad' => 'colombia',
			'eps' => 'st',
			'fondo_pensiones' => 'no',
			'nivel_academico' => 'bachiller',
			'titulo_academico' => 'tecnico',
			'especializacion' => 'no',
			'titulo_especializacion' => 'no',
			'regimen_iva' => 'no',
			'excluido_iva' => 'no',
			'declarante_renta' => 'no',
			'pensionado' => 'no',
			'proceso' => 'no',
			'estado' => '1'

		));
	}
}