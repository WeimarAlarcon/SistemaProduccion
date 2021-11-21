@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Pedidos</h1>
@stop

@section('content')
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Fecha Entrega</th>
        <th scope="col">Lugar de Entrega</th>
        <th scope="col">Cantidad Total</th>
        <th scope="col">celular</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
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
        <td>{{$pedido->cliente_celular}}</td>
        <td>{{$pedido->persona_n}}</td>
        <td>{{$pedido->persona_a}}</td>
        <td>
        <button type="button" class="btn btn-outline-success"><a class="btn " href="{{route('pedido.edit',$pedido->id)}}">Editar</a></button>
                    <button type="button" class="btn btn-outline-warning">
                    <form action="{{route('pedido.destroy',$pedido->id)}}" method="POST">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <input class="btn " type="submit" value="eliminar">
                    </form>
            </button>
        </td>
        </tr>
    </tbody>
    @endforeach
    </table>
    <a href="{{route('pedido.create')}}">Crear</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop