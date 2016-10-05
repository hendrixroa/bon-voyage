<?php

namespace Voyage;

use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
    protected $fillable = [
    	'codigo', 'nombre', 'lugar',
	];

	public function viajes(){
        return $this->belongsTo('Voyage\Viajes');
    }

}
