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
        <input type="number" name="celular" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="idpersona" class="form-label">Persona</label>
    </div>
    <div class="mb-3">
        <select name="idpersona" id="idcliente">
            @foreach($personas as $persona)
            <option value="{{$persona->id}}">{{$persona->nombre}} {{$persona->apellido}}</option>
            @endforeach
        </select>
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