@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Pedidos</h1>
@stop

@section('content')
<form action="{{route('pedido.update',$pedido->id)}}" method="POST">
    {{ csrf_field() }}
      @method('PUT')
      <div class="mb-3">
        <label for="lugar_entrega" class="form-label">Lugar de Entrega</label>
        <input type="text" name="lugar_entrega" class="form-control" id="" value="{{$pedido->lugar_entrega}}">
    </div>
    <div class="mb-3">
        <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
        <input type="date" name="fecha_entrega" class="form-control" id="" value="{{$pedido->fecha_entrega}}">
    </div>
    <div class="mb-3">
        <label for="cantidad_total" class="form-label">Cantidad Total</label>
        <input type="number" name="cantidad_total" class="form-control" id="" value="{{$pedido->cantidad_total}}">
    </div>
    <div class="mb-3">
        <label for="idcliente" class="form-label">Cliente</label>
    </div>
    <div class="mb-3">
        <select class="form-control" name="idcliente" aria-label="Default select example">
            @foreach($clientes as $cliente)
            @if ($cliente->id == $pedido->idcliente)
                <option value="{{$cliente->id}}" selected>{{$cliente->nombre}} {{$cliente->apellido}}</option>
            @else 
                <option value="{{$cliente->id}}">{{$cliente->nombre}} {{$cliente->apellido}}</option>
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
