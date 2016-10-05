<?php

namespace Voyage\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

use Voyage\Http\Requests;
use Voyage\Viajeros;

class ViajerosController extends Controller
{
    public function crear(){
    	return view('home');
    }

    public function storeviajero(){

    	$data = Input::all();
    	$viajero = new Viajeros();
    	$viajero->nombre = $data['nombre'];
    	$viajero->cedula = $data['cedula'];
    	$viajero->direccion = $data['direccion'];
    	$viajero->telefono = $data['telefono'];

    	if($viajero->save()){
    		return view('home');
    	}

    }
}
