<?php

namespace Voyage;

use Illuminate\Database\Eloquent\Model;

class Viajes extends Model
{
    protected $fillable = [
    	'cod_viajes', 'num_plazas', 'fecha_viajes', 'viajero_id', 'origen_id','destino_id',   
	];

	public function viajeros(){
        return $this->belongsTo('Voyage\Viajeros');
    }

    public function origen()
    {
        return $this->hasOne('Voyage\Origen');
    }

    public function destino()
    {
        return $this->hasOne('Voyage\Destino');
    }
}
