@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalle</h1>
@stop

@section('content')

    <div class="card">
        <h5 class="card-header">Detalle de Pedido</h5>
        <div class="card-body">
            <div class="row">
                
                <div class="col">
                    <label for="">Numero de Pedido: </label>
                    <span>{{$pedidos->id}}</span><br>
                    <label for="">Nombre Completo: </label>
                    <span>{{$pedidos->clientes->nombre}} {{$pedidos->clientes->apellido}}</span><br>
                </div>
                <div class="col">
                    <label for="">Fecha: </label>
                    <span>{{$pedidos->fecha_entrega}}</span><br>
                    <label for="">Lugar de Entrega: </label>
                    <span>{{$pedidos->lugar_entrega}}</span><br>
                </div>

            </div>
            <br>
            <div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Talla</th>
                    <th scope="col">Color</th>
                    <th scope="col">Cantidad</th>
                  </tr>
                </thead>
                <tbody>
                @if ($detallepedidos->id == $pedidos->idcliente)
                <tr>
                    <th scope="row">{{$detallepedidos->id}}</th>
                    <td>{{$detallepedidos->pedidos->id}}</td>
                    <td>{{$detallepedidos->productos->nombre}}</td>
                    <td>{{$detallepedidos->descripcion}}</td>
                    <td>{{$detallepedidos->talla}}</td>
                    <td>{{$detallepedidos->color}}</td>
                    <td>{{$detallepedidos->cantidad}}</td>
                </tr>
                @endif 
    
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th>
                        <span class="pull-right">TOTAL</span>
                    </th>
                    <th>{{$pedidos->cantidad_total}}</th>
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