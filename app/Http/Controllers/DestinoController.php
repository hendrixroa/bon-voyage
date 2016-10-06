<?php

namespace Voyage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Validation\Validator;
use Response;
use Voyage\Destino;
use DB;

use Voyage\Http\Requests;

class DestinoController extends Controller
{
    public function creardestino(){
    	return view('creardestino');
    }

    public function storedestino(){

    	$data = Input::all();
    	$destino = new Destino();
    	$destino->codigo = $data['codigo'];
    	$destino->nombre = $data['nombre'];
    	$destino->lugar = $data['lugar'];

    	if($destino->save()){

    		return "Destino guardado exitosamente";

    	}else{
    		return "Error al guardar el destino";
    	}

    }

    public function getdestinos(){
        $destinos = DB::table('destinos')->get();
        return response()->json($destinos);
    }

}
