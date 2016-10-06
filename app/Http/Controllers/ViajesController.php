<?php

namespace Voyage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Validation\Validator;
use Voyage\Http\Requests;
use DB;
use Voyage\Viajes;
use Voyage\Viajeros;
use Voyage\Origen;
use Voyage\Destino;

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

    public function deleteviaje(){
      $deleted = Viajes::where('id', Input::get('viajes'))->delete();
      return "Eliminado con exito";
    }

      public function updateviaje(){
      $viajes = DB::table('viajes')->where('id','=',Input::get('viaje'))->get();
      $viajeros = DB::table('viajeros')->where('id','=',$viajes[0]->viajero_id)->get(); 
      $origenes = DB::table('origens')->where('id','=',$viajes[0]->origen_id)->get();
      $destinos = DB::table('destinos')->where('id','=',$viajes[0]->destino_id)->get();
      $new_viajeros = DB::table('viajeros')->get();
      $new_origenes = DB::table('origens')->get();
      $new_destinos = DB::table('destinos')->get();
      return view('updateviaje')->with('viajeros',$viajeros)->with('origenes',$origenes)->with('destinos',$destinos)->with('viajes',$viajes)->with('new_viajeros',$new_viajeros)->with('new_origenes',$new_origenes)->with('new_destinos',$new_destinos);
    }

    public function updatetravel(){
      $data = Input::all();

      $viaje = DB::table('viajes')
            ->where('id', $data['id'])
            ->update(['cod_viajes' => $data['cod_viajes'],
                      'num_plazas' => $data['num_plazas'],
                      'fecha_viajes' => $data['fecha_viajes'],
                      'viajero_id' => $data['viajero'],
                      'origen_id' => $data['origen'],
                      'destino_id' => $data['destino']
            ]);

       if($viaje){
          return "Viaje actualizado con exito";
       }else{
          return "Vieje no actualizado";
       }
    }
}
