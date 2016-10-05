<?php

namespace Voyage;

use Illuminate\Database\Eloquent\Model;

class Viajeros extends Model
{
    protected $fillable = [
        'nombre', 'cedula', 'direccion' ,'telefono',
    ];

    public function viajes()
    {
        return $this->hasMany('Voyage\Viaje');
    }
}
