@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Detalles Venta</h1>
@stop

@section('content')
<div class="container">
    <div>
        <a href="{{route('detalleventa.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Crear Detalle de Venta</i></button></a>
        <a href="{{route('venta.index')}}"><button type="button" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"> Volver</i></button></a>
    </div><br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Fecha de Venta Venta</th>
        <th scope="col">Cantidad Total P.</th>
        <th scope="col">Precio de Producto</th>
        <th scope="col">Precio Total</th>
        <th scope="col">Operaciones</th>
        </tr>
    </thead>
    @foreach($detalleventas as $detalleventa)
    <tbody>
        <tr>
        <th scope="row">{{$detalleventa->id}}</th>
        <td>{{$detalleventa->ventas->fecha}}</td>
        <td>{{$detalleventa->pedidos->cantidad_total}}</td>
        <td>{{$detalleventa->productos->precio_unitario}}</td>
        <td>{{$detalleventa->precio_total}}</td>
        <td>
            <a class href="{{route('detalleventa.edit',$detalleventa->id)}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"> Editar</i></button></a>
            <i class="fas ">
                <form action="{{route('detalleventa.destroy',$detalleventa->id)}}" method="POST">
                {{ csrf_field() }}
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"> Eliminar</i></button>
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