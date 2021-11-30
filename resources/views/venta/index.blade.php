@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Ventas</h1>
@stop

@section('content')
<div class="container">
    <div>
        <a href="{{route('venta.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Crear Venta</i></button></a>
        <a href="{{route('detalleventa.index')}}"><button type="button" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right"> Detalle de Venta</i></button></a>
    </div><br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Codigo</th>
        <th scope="col">Fecha</th>
        <th scope="col">celular</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Operaciones</th>
        </tr>
    </thead>
    @foreach($ventas as $venta)
    <tbody>
        <tr>
        <th scope="row">{{$venta->id}}</th>
        <td>{{$venta->codigo}}</td>
        <td>{{$venta->fecha}}</td>
        <td>{{$venta->clientes->celular}}</td>
        <td>{{$venta->clientes->personas->nombre}}</td>
        <td>{{$venta->clientes->personas->apellido}}</td>
        <td>
            <a class href="{{route('venta.edit',$venta->id)}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"> Editar</i></button></a>
            <i class="fas ">
                <form action="{{route('venta.destroy',$venta->id)}}" method="POST">
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