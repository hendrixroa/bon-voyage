@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar viajero</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/storeviajero') }}">
                 {{ csrf_field() }}
                    <input type="text" name="nombre" placeholder="Nombre"><br>
                    <input type="text" name="telefono" placeholder="Telefono"><br>
                    <input type="text" name="cedula" placeholder="Cedula"><br>
                    <input type="text" name="direccion" placeholder="Direccion"><br>   
                    <button type="submit" class="btn btn-primary">
                    Agregar Viajero
                    </button>
                </form>
                
            </div>
        </div>
    </div>
   <div class="row">
       <div class="col-md-2 col-md-offset-2">
           <a class="btn btn-primary" href="{{ url('/crearviajes') }}">Agregar viajes</a>
       </div>

       <div class="col-md-2 col-md-offset-1">
           <a class="btn btn-primary" href="{{ url('/crearorigen') }}">Agregar Origen</a>
       </div>
       <div class="col-md-2 col-md-offset-1">
           <a class="btn btn-primary" href="{{ url('/creardestino') }}">Agregar Destino</a>
       </div>
   </div><br>

   <div class="row">
       <div class="col-md-2 col-md-offset-2">
           <a class="btn btn-primary" href="">Consultar Viajeros</a>
       </div>

       <div class="col-md-2 col-md-offset-1">
           <a class="btn btn-primary" href="">Consultar Viajes</a>
       </div>

       <div class="col-md-2 col-md-offset-1">
           <a class="btn btn-primary" href="">Consultar Origenes</a>
       </div>
   </div><br>


   <div class="row">
       <div class="col-md-2 col-md-offset-2">
           <a class="btn btn-primary" href="">Consultar Destinos</a>
       </div>
   </div><br>



</div>
@endsection