@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pedidos</h1>
@stop

@section('content')

    <div>
        <a href="{{route('detallepedido.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Nuevo Pedido</i></button></a>
        <!--
        <a href="{{route('pedido.index')}}"><button type="button" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"> Volver</i></button></a>
        -->
    </div><br>
    <table class="table table-ligth table-striped">
    <thead class="bg-primary">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Talla</th>
            <th scope="col">Color</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Pedido</th>
            <th scope="col">Producto</th>
            <th scope="col">Operaciones</th>
        </tr>
    </thead>
    
    @foreach($detallepedidos as $detallepedido)
        <tr>
            <th scope="row">{{$detallepedido->id}}</th>
            <td>{{$detallepedido->descripcion}}</td>
            <td>{{$detallepedido->talla}}</td>
            <td>{{$detallepedido->color}}</td>
            <td>{{$detallepedido->cantidad}}</td>
            <td>{{$detallepedido->idpedido}}</td>
            <td>{{$detallepedido->productos->nombre}}</td>
            <td>
                <a class href="{{route('detallepedido.edit',$detallepedido->id)}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"> Editar</i></button></a>
                <i class="fas ">
                    <form action="{{route('detallepedido.destroy',$detallepedido->id)}}" method="POST">
                    {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"> Eliminar</i></button>
                            <input class="btn " type="submit" value="">
                    </form>
                </i>
            </td>
        
        </tr>
    @endforeach
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop