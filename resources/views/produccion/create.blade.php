@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nueva Produccion</h1>
@stop

@section('content')
    <form action="{{route('produccion.store')}}" method="POST">
        {{ csrf_field() }}
    <div class="mb-3">
        <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
        <input type="date" name="fecha_inicio" class="form-control">
    </div>
    <div class="mb-3">
        <label for="idpedido" class="form-label">Nro de Pedido</label>
    </div>
    <div class="mb-3">
        <select name="idpedido" id="idpedido">
            @foreach($pedidos as $pedido)
            <option value="{{$pedido->id}}"> id:{{$pedido->id}} {{$pedido->cantidad_total}} </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="idinsumo" class="form-label">Insumo</label>
    </div>
    <div class="mb-3">
        <select name="idinsumo" id="idinsumo">
            @foreach($insumos as $insumo)
            <option value="{{$insumo->id}}">id:{{$insumo->id}} {{$insumo->nombre}} </option>
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