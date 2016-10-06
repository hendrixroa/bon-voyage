@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar Viajes</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/updatetravel') }}">
                 {{ csrf_field() }}
                    <input type="text" name="cod_viajes" placeholder="Codigo del viaje" value="{{ $viajes[0]->cod_viajes }}"><br>
                    <input type="text" name="num_plazas" placeholder="Numero de plazas" value="{{ $viajes[0]->num_plazas }}"><br>
                    <input type="date" name="fecha_viajes" placeholder="Fecha del viaje" value="{{ $viajes[0]->fecha_viajes }}" ><br>
                    <label for="viajero" class="col-md-4 control-label">Viajero</label>
                         <select name="viajero" id="viajero" class="form-control">
                                    <option value="{{ $viajeros[0]->id }}" selected="selected">{{ $viajeros[0]->nombre }}</option>
                                    @foreach($new_viajeros as $new_viajero)
                                    @if($new_viajero->id != $viajeros[0]->id)
                                       <option value="{{ $new_viajero->id }}">{{ $new_viajero->nombre }}</option>
                                    @endif   
                                    @endforeach
                        </select><br>
                        <label for="origen" class="col-md-4 control-label">Origen</label>
                         <select name="origen" id="origen" class="form-control">
                                <option value="{{ $origenes[0]->id }}" selected="selected">{{ $origenes[0]->lugar }}</option>
                                    @foreach($new_origenes as $new_origen)
                                    @if($new_origen->id != $origenes[0]->id)
                                    <option value="{{ $new_origen->id }}">{{ $new_origen->lugar }}</option>
                                    @endif
                                    @endforeach
                        </select><br>
                        <label for="destino" class="col-md-4 control-label">Destino</label>
                         <select name="destino" id="destino" class="form-control">
                          <option value="{{ $destinos[0]->id }}" selected="selected">{{$destinos[0]->lugar}}</option>
                                    @foreach($new_destinos as $new_destino)
                                    @if($new_destino->id != $destinos[0]->id)
                                    <option value="{{ $new_destino->id }}">{{ $new_destino->lugar }}</option>
                                    @endif
                                    @endforeach
                        </select><br>

                        <input type="hidden" name="id" value="{{ $viajes[0]->id }}">

                    <button type="submit" class="btn btn-primary">
                    Actualizar Viaje
                    </button>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection