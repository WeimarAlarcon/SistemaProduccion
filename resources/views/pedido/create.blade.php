@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Pedidos</h1>
@stop

@section('content')
    <form action="{{route('pedido.store')}}" method="POST">
        {{ csrf_field() }}
    <div class="mb-3">
        <label for="lugar_entrega" class="form-label">Lugar de Entrega</label>
        <input type="text" name="lugar_entrega" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
        <input type="date" name="fecha_entrega" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="cantidad_total" class="form-label">Cantidad Total</label>
        <input type="number" name="cantidad_total" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="idcliente" class="form-label">Cliente</label>
    </div>
    <div class="mb-3">
        <select name="idcliente" id="idcliente">
            @foreach($clientes as $cliente)
            <option value="{{$cliente->id}}">{{$cliente->personas->nombre}} {{$cliente->personas->apellido}}</option>
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
