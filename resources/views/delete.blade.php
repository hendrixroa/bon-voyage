@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Eliminar</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/storeviajes') }}">
                 {{ csrf_field() }}
                    <label for="viajero" class="col-md-4 control-label">Viajeros</label>
                         <select name="viajero" id="viajero" class="form-control">
                                    @foreach($viajeros as $viajero)
                                    <option value="{{ $viajero->id }}">{{ $viajero->nombre }}</option>
                                    @endforeach
                        </select><br>
                    <button type="submit" class="btn btn-primary">
                    Eliminar viajeros
                    </button>
                </form><br>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/storeviajes') }}">
                 {{ csrf_field() }}
                    <label for="viajes" class="col-md-4 control-label">Viajes</label>
                         <select name="viajes" id="viajes" class="form-control">
                                    @foreach($viajes as $viaje)
                                    <option value="{{ $viajero->id }}">{{ $viaje->cod_viajes }}</option>
                                    @endforeach
                        </select><br>
                    <button type="submit" class="btn btn-primary">
                    Eliminar viajes
                    </button>
                </form><br>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/storeviajes') }}">
                 {{ csrf_field() }}
                    <label for="origen" class="col-md-4 control-label">Origenes</label>
                         <select name="origen" id="origen" class="form-control">
                                    @foreach($origenes as $origen)
                                    <option value="{{ $origen->id }}">{{ $origen->nombre }}</option>
                                    @endforeach
                        </select><br>
                    <button type="submit" class="btn btn-primary">
                    Eliminar Origen
                    </button>
                </form><br>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/storeviajes') }}">
                 {{ csrf_field() }}
                    <label for="destino" class="col-md-4 control-label">Destino</label>
                         <select name="destino" id="destino" class="form-control">
                                    @foreach($destinos as $destino)
                                    <option value="{{ $destino->id }}">{{ $destino->nombre }}</option>
                                    @endforeach
                        </select><br>
                    <button type="submit" class="btn btn-primary">
                    Eliminar destino
                    </button>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection