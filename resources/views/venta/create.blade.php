@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Detalle de Venta</h1>
@stop

@section('content')
    <form action="{{route('venta.store')}}" method="POST">
        {{ csrf_field() }}
    <div class="mb-3">
        <label for="codigo" class="form-label">Codigo</label>
        <input type="text" name="codigo" class="form-control">
    </div>
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" name="fecha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="idcliente" class="form-label">Cliente</label>
    </div>
    <div class="mb-3">
        <select name="idcliente" id="idcliente" class="form-control">
            <option value=""></option>
            @foreach($clientes as $cliente)
            <option value="{{$cliente->id}}">{{$cliente->nombre}} {{$cliente->apellido}}</option>
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