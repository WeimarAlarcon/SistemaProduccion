@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalle de Pedido</h1>
@stop

@section('content')
<div >
<a href="{{route('detallepedido.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Nuevo Detalle Pedido</i></button></a>
</div>
<br>
<div class="card">
    <h5 class="card-header">Detalle de Pedido</h5>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <label for="">id: </label>
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
                <th scope="col">idpedido</th>
                <th scope="col">Producto</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Talla</th>
                <th scope="col">Color</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Operaciones</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($detallepedidos as $detallepedido)
            @if ($detallepedido->idpedido == $pedidos->id)
            <tr>
                <th scope="row">{{$detallepedido->id}}</th>
                <td>{{$detallepedido->idpedido}}</td>
                <td>{{$detallepedido->productos->nombre}}</td>
                
                <td>{{$detallepedido->descripcion}}</td>
                <td>{{$detallepedido->talla}}</td>
                <td>{{$detallepedido->color}}</td>
                <td>{{$detallepedido->cantidad}}</td>
                <td>
                    <a class href="{{route('detallepedido.edit',$detallepedido->id)}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>
                    <i class="fas ">
                        <form action="{{route('detallepedido.destroy',$detallepedido->id)}}" method="POST">
                        {{ csrf_field() }}
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                <input class="btn " type="submit" value="">
                        </form>
                    </i>
                </td>
            </tr>
            @endif
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th>
                    <span class="pull-right">TOTAL</span>
                </th>

                @if ($pedidos->cantidad_total != $pedidos->cantidad_total)
                <th>{{$pedidos->cantidad_total+$detallepedido->cantidad}}</th> 
                @else
                
                <th>{{$pedidos->cantidad_total}}</th>
                @endif
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