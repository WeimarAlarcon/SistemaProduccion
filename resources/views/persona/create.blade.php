@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Personas</h1>
@stop

@section('content')
    <form action="{{route('persona.store')}}" method="POST">
        {{ csrf_field() }}
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
