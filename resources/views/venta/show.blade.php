@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Venta</h1>
@stop

@section('content')

    <div class="card">
        <h5 class="card-header">Detalle de Venta</h5>
        <div class="card-body">
            <div class="row">
                
                <div class="col">
                    <label for="">Numero de Venta: </label>
                    <span>{{$ventas->id}}</span><br>
                    <label for="">Codigo de Venta: </label>
                    <span>{{$ventas->codigo}}</span><br>
                </div>
                <div class="col">
                    <label for="">Fecha: </label>
                    <span>{{$ventas->fecha}}</span><br>
                    <label for="">Nombre Completo: </label>
                    <span>{{$ventas->clientes->nombre}} {{$ventas->clientes->apellido}}</span><br>
                </div>

            </div>
            <br>
            <div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Producto </th>
                    <th scope="col">Cantidad Total de Pedido</th>
                    <th scope="col">Precio Unitario</th>
                  </tr>
                </thead>
                <tbody>

                <tr>
                    @if ($detalleventas->id == $ventas->idcliente)
                        <th scope="row">{{$detalleventas->id}}</th>
                        <td>{{$detalleventas->productos->nombre}}</td>
                        <td>{{$detalleventas->pedidos->cantidad_total}}</td>
                        <td>{{$detalleventas->productos->precio_unitario}}</td>
                    @endif 
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <th>
                        <span class="pull-right">Precio Total</span>
                    </th>
                    <th>{{$detalleventas->precio_total}}</th>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop