@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Produccion</h1>
@stop

@section('content')
<form action="{{route('produccion.update',$produccion->id)}}" method="POST">
    {{ csrf_field() }}
      @method('PUT')
      <div class="mb-3">
        <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
        <input type="date" name="fecha_inicio" class="form-control" id="" value="{{$produccion->fecha_inicio}}">
    </div>
    <div class="mb-3">
        <label for="idpedido" class="form-label">Cantidad de pedido del Cliente</label>
    </div>
    <div class="mb-3">
        <select name="idpedido" id="idpedido" class="form-control">
            @foreach($pedidos as $pedido)
            @if ($pedido->id == $produccion->idpedido)
                <option value="{{$pedido->id}}" selected>{{$pedido->cantidad_total}}</option>
            @else 
                <option value="{{$pedido->id}}" >{{$pedido->cantidad_total}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="idinsumo" class="form-label">Insumo</label>
    </div>
    <div class="mb-3">
        <select name="idinsumo" id="idinsumo" class="form-control">
            @foreach($insumos as $insumo)
            @if ($insumo->id == $produccion->idinsumo)
                <option value="{{$insumo->id}}" selected>{{$insumo->nombre}}</option>
            @else 
                <option value="{{$insumo->id}}" >{{$insumo->nombre}}</option>
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