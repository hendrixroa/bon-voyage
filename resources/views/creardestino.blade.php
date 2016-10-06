@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Destino</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/storedestino') }}">
                 {{ csrf_field() }}
                    <input type="text" name="codigo" placeholder="Codigo"><br>
                    <input type="text" name="nombre" placeholder="Nombre"><br>
                    <input type="text" name="lugar" placeholder="Lugar"><br>
                    <button type="submit" class="btn btn-primary">
                    Agregar Destino
                    </button>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection