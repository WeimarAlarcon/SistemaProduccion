@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Detalle de Pedidos</h1>
@stop

@section('content')
<form action="{{route('detallepedido.update',$detallepedido->id)}}" method="POST">
    {{ csrf_field() }}
      @method('PUT')
      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" name="descripcion" class="form-control" id="" value="{{$detallepedido->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="talla" class="form-label">Talla</label>
        <input type="text" name="talla" class="form-control" id="" value="{{$detallepedido->talla}}">
    </div>
    <div class="mb-3">
        <label for="color" class="form-label">Color</label>
        <input type="text" name="color" class="form-control" id="" value="{{$detallepedido->color}}">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" name="cantidad" class="form-control" id="" value="{{$detallepedido->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="idpedido" class="form-label">Cliente</label>
    </div>
    <div class="mb-3">
        <select name="idpedido" id="idpedido">
            @foreach($pedidos as $pedido)
            
            @if ($pedido->id == $detallepedido->idpedido)
                <option value="{{$pedido->id}}" selected>{{$pedido->id}}  {{$pedido->cantidad_total}}</option>
            @else 
                <option value="{{$pedido->id}}" >{{$pedido->id}}  {{$pedido->cantidad_total}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="idproducto" class="form-label">Producto</label>
    </div>
    <div class="mb-3">
        <select name="idproducto" id="idproducto">
            @foreach($productos as $producto) 
            @if ($producto->id == $detallepedido->idproducto)
                <option value="{{$producto->id}}" selected>{{$producto->id}}  {{$producto->nombre}}</option>
            @else 
                <option value="{{$producto->id}}" >{{$producto->id}}  {{$producto->nombre}}</option>
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