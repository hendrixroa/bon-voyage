<?php

namespace Voyage;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $fillable = [
    	'codigo', 'nombre', 'lugar',
	];

	public function viajes(){
        return $this->belongsTo('Voyage\Viajes');
    }
}
