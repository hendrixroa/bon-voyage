<?php

namespace Voyage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Validation\Validator;
use Response;
use Voyage\Origen;
use DB;
use Voyage\Http\Requests;

class OrigenController extends Controller
{
    public function crearOrigen(){
    	return view('crearorigen');
    }

    public function storeorigen(){

    	$data = Input::all();
    	$origen = new Origen();
    	$origen->codigo = $data['codigo'];
    	$origen->nombre = $data['nombre'];
    	$origen->lugar = $data['lugar'];

    	if($origen->save()){

    		return "Origen guardado exitosamente";

    	}else{
    		return "Error al guardar el origen";
    	}

    }

    public function getorigenes(){
        $origenes = DB::table('origens')->get();
        return response()->json($origenes);
    }

    public function deleteorigen(){
      $deleted = Origen::where('id', Input::get('origen'))->delete();
      return "Eliminado con exito";
    }
}
