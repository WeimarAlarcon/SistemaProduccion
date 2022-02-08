@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Formulario de Detalles Pedidos</h1>
@stop

@section('content')
<div class="container">
    <form action="{{route('detallepedido.store')}}" method="POST">
        {{ csrf_field() }}
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" name="descripcion" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="talla" class="form-label">Talla</label>
        <input type="text" name="talla" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="color" class="form-label">Color</label>
        <input type="text" name="color" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" name="cantidad" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="idpedido" class="form-label">Pedido</label>
    </div>
    <div class="mb-3">
        <select name="idpedido" id="idpedido" class="form-control">
            <option value=""></option>
            @foreach($pedidos as $pedido)
            @foreach($clientes as $cliente)
            @if ($cliente->id == $pedido->idcliente)
            <option value="{{$pedido->id}}">{{$pedido->id}} {{$cliente->nombre}} {{$cliente->apellido}}</option>
            @endif
            @endforeach
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="idproducto" class="form-label">Producto</label>
    </div>
    <div class="mb-3">
        <select name="idproducto" id="idproducto" class="form-control">
            <option value=""></option>
            @foreach($productos as $producto)
            <option value="{{$producto->id}}">{{$producto->nombre}}</option>
            @endforeach
        </select>
    </div>
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