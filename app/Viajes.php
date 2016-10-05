<?php

namespace Voyage;

use Illuminate\Database\Eloquent\Model;

class Viajes extends Model
{
    protected $fillable = [
    	'cod_viajes', 'num_plazas', 'fecha_viajes',
	];

	public function viajeros(){
        return $this->belongsTo('Voyage\Viajeros');
    }
}
