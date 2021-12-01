@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Produccion</h1>
@stop

@section('content')
<div class="container">
    <div>
        <a href="{{route('produccion.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Nueva Produccion</i></button></a>
    </div><br>
    <table class="table table-ligth table-striped">
        <thead class="bg-info">
            <tr>
            <th scope="col">id</th>
            <th scope="col">Fecha Inicio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Cliente</th>
            <th scope="col">Material de Tela</th>
            <th scope="col">Operaciones</th>
            </tr>
        </thead>
        @foreach($producciones as $produccion)
        <tr>
            <th scope="row">{{$produccion->id}}</th>
            <td>{{$produccion->fecha_inicio}}</td>
            <td>{{$produccion->pedidos->cantidad_total}}</td>
            <td>{{$produccion->pedidos->clientes->personas->nombre}} {{$produccion->pedidos->clientes->personas->apellido}}</td>
            <td>{{$produccion->insumos->nombre}}</td>
            <td>
                <a class href="{{route('produccion.edit',$produccion->id)}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"> Editar</i></button></a>
                <i class="fas ">
                    <form action="{{route('produccion.destroy',$produccion->id)}}" method="POST">
                    {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"> Eliminar</i></button>
                    </form>
                </i>
            </td>
        </tr>
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