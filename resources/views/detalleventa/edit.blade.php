@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Detalle de Venta</h1>
@stop

@section('content')
<form action="{{route('detalleventa.update',$detalleventa->id)}}" method="POST">
    {{ csrf_field() }}
      @method('PUT')
    <div class="mb-3">
        <label for="idventa" class="form-label">Codigo Venta</label>
    </div>
    <div class="mb-3">
        <select name="idventa" id="idventa" class="form-control">
            @foreach($ventas as $venta)
            @if ($venta->id == $detalleventa->idpedido)
                <option value="{{$venta->id}}" selected>{{$venta->codigo}}</option>
            @else 
                <option value="{{$venta->id}}" >{{$venta->codigo}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="idpedido" class="form-label" class="form-control">Cantidad</label>
    </div>
    <div class="mb-3">
        <select name="idpedido" id="idpedido" class="form-control">
            @foreach($pedidos as $pedido)
            @if ($pedido->id == $detalleventa->idpedido)
                <option value="{{$pedido->id}}" selected> {{$pedido->cantidad_total}}</option>
            @else 
                <option value="{{$pedido->id}}" >{{$pedido->cantidad_total}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="idproducto" class="form-label" class="form-control">Precio Unitario</label>
    </div>
    <div class="mb-3">
        <select name="idproducto" id="idproducto" class="form-control">
            @foreach($productos as $producto) 
            @if ($producto->id == $detalleventa->idproducto)
                <option value="{{$producto->id}}" selected>{{$producto->precio_unitario}}</option>
            @else 
                <option value="{{$producto->id}}" >{{$producto->precio_unitario}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="precio_total" class="form-label">Precio Total</label>
        <input type="number" name="precio_total" class="form-control" id="" value="{{$detalleventa->precio_total}}">
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