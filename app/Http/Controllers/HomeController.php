<?php

namespace Voyage\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Voyage\Http\Requests;

class HomeController extends Controller
{
    public function delete(){
    	$viajeros = DB::table('viajeros')->get();
    	$origenes = DB::table('origens')->get();
    	$destinos = DB::table('destinos')->get();
    	$viajes = DB::table('viajes')->get();
    	return view('delete')->with('viajeros',$viajeros)->with('origenes',$origenes)->with('destinos',$destinos)->with('viajes',$viajes);
    }
}
