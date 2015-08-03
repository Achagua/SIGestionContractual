<?php namespace App\Models\Regional;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model {

	protected $table = 'regional';
	protected $fillable = ['n_regional', 'zona_regional', 'nombre_regional', 'nombre_director_regional', 'direccion_regional', 'telefono_regional'];
	protected $guarded = ['id'];

}
