@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nuevo Cliente</h1>
@stop

@section('content')
<div>
    <form action="{{route('cliente.store')}}" method="POST">
        {{ csrf_field() }}
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombres:</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellidos:</label>
        <input type="text" name="apellido" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="celular" class="form-label">Celular</label>
        <input type="number" name="celular" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="idpersona" class="form-label">Sexo:</label>
    </div>
    <div class="mb-3">
        <select class="form-control form-select-lg mb-3" name="idpersona" aria-label="Default select example">
            <option selected>-</option>
            @foreach($personas as $persona)
            <option value="{{$persona->id}}">{{$persona->sexo}}</option>
            @endforeach
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop