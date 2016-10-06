@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Viajes</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/storeviajero') }}">
                 {{ csrf_field() }}
                    <input type="text" name="cod_viajes" placeholder="Codigo del viaje"><br>
                    <input type="text" name="num_plazas" placeholder="Numero de plazas"><br>
                    <input type="date" name="fecha_viajes" placeholder="Fecha del viaje"><br>
                    <label for="viajero" class="col-md-4 control-label">Viajero</label>
                         <select name="viajero" id="viajero" class="form-control">
                                    @foreach($viajeros as $viajero)
                                    <option value="{{ $viajero->id }}">{{ $viajero->lugar }}</option>
                                    @endforeach
                        </select><br>
                        <label for="origen" class="col-md-4 control-label">Origen</label>
                         <select name="origen" id="origen" class="form-control">
                                    @foreach($origenes as $origen)
                                    <option value="{{ $origen->id }}">{{ $origen->lugar }}</option>
                                    @endforeach
                        </select><br>
                        <label for="destino" class="col-md-4 control-label">Destino</label>
                         <select name="destino" id="destino" class="form-control">
                                    @foreach($destinos as $destino)
                                    <option value="{{ $destino->id }}">{{ $destino->lugar }}</option>
                                    @endforeach
                        </select><br>

                    <button type="submit" class="btn btn-primary">
                    Agregar Viaje
                    </button>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection