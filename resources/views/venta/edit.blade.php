@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Venta</h1>
@stop

@section('content')
<form action="{{route('venta.update', $venta->id)}}" method="POST">
{{ csrf_field() }}
      @method('PUT')
    <div class="mb-3">
        <label for="codigo" class="form-label">Codigo</label>
        <input type="text" name="codigo" class="form-control" id="" value="{{$venta->codigo}}">
    </div>
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" name="fecha" class="form-control" id="" value="{{$venta->fecha}}">
    </div>
    <div class="mb-3">
        <label for="idcliente" class="form-label">Cliente</label>
    </div>
    <div class="mb-3">
        <select name="idcliente" id="idcliente">
            @foreach($clientes as $cliente)
            @if ($cliente->id == $venta->idcliente)
                <option value="{{$cliente->id}}" selected>{{$cliente->id}} {{$cliente->personas->nombre}} {{$cliente->personas->apellido}}</option>
            @else 
                <option value="{{$cliente->id}}" >{{$cliente->id}} {{$cliente->personas->nombre}} {{$cliente->personas->apellido}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop