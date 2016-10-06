<?php

namespace Voyage\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Response;
use Voyage\Http\Requests;
use Voyage\Viajeros;
use DB;

class ViajerosController extends Controller
{
    public function crear(){
        $viajeros = DB::table('viajeros')->get();
        $viajes = DB::table('viajes')->get();
        $origenes = DB::table('origens')->get();
        $destinos = DB::table('destinos')->get();
    	return view('home')->with('viajeros',$viajeros)->with('viajes',$viajes)->with('origenes',$origenes)->with('destinos',$destinos);
    }

    public function storeviajero(){

    	$data = Input::all();
    	$viajero = new Viajeros();
    	$viajero->nombre = $data['nombre'];
    	$viajero->cedula = $data['cedula'];
    	$viajero->direccion = $data['direccion'];
    	$viajero->telefono = $data['telefono'];

    	if($viajero->save()){
    		//para retornar el json
    		return "Viajero guardado con exito";
    	}
      	else{

        	return "Error no se pudo guardar al viajero";
    	}
    	
    }

    public function getviajeros(){
        $viajeros = DB::table('viajeros')->get();
        return response()->json($viajeros);
    }

    public function deleteviajero(){
      $deleted = Viajeros::where('id', Input::get('viajero'))->delete();
      return "Eliminado con exito";
    }
}
