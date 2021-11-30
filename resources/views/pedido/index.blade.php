@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Pedidos</h1>
@stop

@section('content')
<div class="container">
    <div>
        <a href="{{route('pedido.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Crear Pedido</i></button></a>
        <a href="{{route('detallepedido.index')}}"><button type="button" class="btn btn-primary"><i class="fas">Detalle de Pedido</i></button></a> 
    </div><br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Fecha Entrega</th>
        <th scope="col">Lugar de Entrega</th>
        <th scope="col">Cantidad Total</th>
        <th scope="col">celular</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Operaciones</th>
        </tr>
    </thead>
    @foreach($pedidos as $pedido)
    <tbody>
        <tr>
        <th scope="row">{{$pedido->id}}</th>
        <td>{{$pedido->fecha_entrega}}</td>
        <td>{{$pedido->lugar_entrega}}</td>
        <td>{{$pedido->cantidad_total}}</td>
        <td>{{$pedido->clientes->celular}}</td>
        <td>{{$pedido->clientes->personas->nombre}}</td>
        <td>{{$pedido->clientes->personas->apellido}}</td>
        <td>
            <a class href="{{route('pedido.edit',$pedido->id)}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"> Editar</i></button></a>
            <i class="fas ">
                <form action="{{route('pedido.destroy',$pedido->id)}}" method="POST">
                {{ csrf_field() }}
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"> Eliminar</i></button>
                        <!--<input class="btn " type="submit" value="eliminar">-->
                </form>
            </i>
        </td>
        </tr>
    </tbody>

    @endforeach
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop