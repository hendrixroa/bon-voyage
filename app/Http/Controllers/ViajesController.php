<?php

namespace Voyage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Validation\Validator;
use Voyage\Http\Requests;
use DB;
use Voyage\Viajes;

class ViajesController extends Controller
{
    public function crearviajes(){
    	$viajeros = DB::table('viajeros')->get();
    	$origenes = DB::table('origens')->get();
    	$destinos = DB::table('destinos')->get();
    	return view('crearviajes')->with('viajeros',$viajeros)->with('origenes',$origenes)->with('destinos',$destinos);
    }

    public function storeviajes(){
       $data = Input::all();
       $viaje = new Viajes();
       $viaje->cod_viajes = $data['cod_viajes'];
       $viaje->num_plazas = $data['num_plazas'];
       $viaje->fecha_viajes = $data['fecha_viajes'];
       $viaje->viajero_id = $data['viajero']; 
       $viaje->destino_id = $data['destino'];
       $viaje->origen_id = $data['origen'];

       if($viaje->save()){
       		return "Viaje guardado con exito";
       }else{
       		return "Vieje no guardado";
       } 
    }

    public function getviajes(){
        $viajes = DB::table('viajes')->get();
        return response()->json($viajes);
    }
}
