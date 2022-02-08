@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Pedidos</h1>
@stop

@section('content')
    <div>
        <a href="{{route('pedido.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Crear Pedido</i></button></a>
        <!--<a href="{{route('detallepedido.index')}}"><button type="button" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right"> Detalle de Pedido</i></button></a> -->
    </div><br>
    <table class="table table-ligth table-striped">
    <thead class="bg-primary">
        <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Celular</th>
        <th scope="col">Fecha Entrega</th>
        <th scope="col">Lugar de Entrega</th>
        <th scope="col">Cantidad Total</th>
        <th scope="col">Detalle</th>
        <th scope="col">Operaciones</th>
        </tr>
    </thead>
    @foreach($pedidos as $pedido)
    <tr>
        <th scope="row">{{$pedido->id}}</th>
        <td>{{$pedido->persona_n}}</td>
        <td>{{$pedido->persona_a}}</td>
        <td>{{$pedido->cliente_celular}}</td>
        <td>{{$pedido->fecha_entrega}}</td>
        <td>{{$pedido->lugar_entrega}}</td>
        <td>{{$pedido->cantidad_total}}</td>
        
        <td><a class href="{{route('pedido.show', $pedido->id)}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-eye"></i></button></a></td>
        
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
    @endforeach
    
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop