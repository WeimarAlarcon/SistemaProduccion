@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Clientes</h1>
@stop

@section('content')
    <form action="{{route('cliente.store')}}" method="POST">
        {{ csrf_field() }}

    <div class="mb-3">
        <label for="celular" class="form-label">Celular</label>
        <input type="number" name="celular" class="form-control">
    </div>

    <div class="form-group">
        <label for="nombre">Nombre Persona</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido">
    </div>
    <div>
    <label for="sexo">Sexo</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" name="sexo" type="checkbox" value="Masculino" id="flexCheckDefault">
        <label class="form-check-label" for="sexo">
            Masculino
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" name="sexo" type="checkbox" value="Femenino" id="flexCheckChecked">
        <label class="form-check-label" for="sexo">
            Femenino
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop