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
      <a class="btn btn-primary" href="{{ url('/getviajeros') }}">Consultar Viajeros</a>
    </div>
    <div class="col-md-2 col-md-offset-1">
      <a class="btn btn-primary" href="{{ url('/getviajes') }}">Consultar Viajes</a>
    </div>
    <div class="col-md-2 col-md-offset-1">
      <a class="btn btn-primary" href="{{ url('/getorigenes') }}">Consultar Origenes</a>
    </div>
  </div><br>
  <div class="row">
    <div class="col-md-2 col-md-offset-2">
      <a class="btn btn-primary" href="{{ url('/getdestinos') }}">Consultar Destinos</a>
    </div>
    <div class="col-md-2 col-md-offset-2">
      <a class="btn btn-primary" href="{{ url('/delete') }}">Eliminar Instancias</a>
    </div>
  </div><br><br><br><br>
  <div class="row">
    <div class="col-md-2 col-md-offset-2">
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/updateviaje') }}">
        {{ csrf_field() }}
        <select name="viaje" id="viaje" class="form-control">
          @foreach($viajes as $viaje)
          <option value="{{ $viaje->id }}">{{ $viaje->cod_viajes }}</option>
          @endforeach
        </select><br>
        <button type="submit" class="btn btn-primary">
        Actualizar Viaje
        </button>
      </form>
    </div>
  </div><br>
  @endsection