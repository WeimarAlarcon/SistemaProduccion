@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear de Detalles Venta</h1>
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-1"></div>
    <div class="col">
    <form action="{{route('detalleventa.store')}}" method="POST">
        {{ csrf_field() }}
    <div class="mb-3">
        <label for="idventa" class="form-label">Codigo de Venta</label>
    </div>
    <div class="mb-3">
        <select name="idventa" id="idventa">
            @foreach($ventas as $venta)
            @if ($venta->id == $venta->id)
                <option value="{{$venta->id}}" selected>Codigo:{{$venta->codigo}}</option>
            @else 
                <option value="{{$venta->id}}" >Codigo:{{$venta->codigo}}</option>
            @endif
            <!--<option value="{{$venta->id}}">{{$venta->id}} {{$venta->fecha}}</option>-->
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="idpedido" class="form-label">Cantidad de Pedido del Cliente</label>
    </div>
    <div class="mb-3">
        <select name="idpedido" id="idpedido">
            @foreach($pedidos as $pedido)
            <option value="{{$pedido->id}}">Cant.:{{$pedido->cantidad_total}} &nbsp; cliente:{{$pedido->clientes->personas->nombre}} {{$pedido->clientes->personas->apellido}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="idproducto" class="form-label">Precio de Producto</label>
    </div>
    <div class="mb-3">
        <select name="idproducto" id="idproducto">
            @foreach($productos as $producto)
            <option value="{{$producto->id}}">Bs:{{$producto->precio_unitario}} &nbsp; producto:{{$producto->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="precio_total" class="form-label">Precio Total</label>
        <input type="number" name="precio_total" class="form-control" value="">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
    </form>

    </div>
    <div class="col-6"></div>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop