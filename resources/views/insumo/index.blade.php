@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Insumos</h1>
@stop

@section('content')
    <div>
        <a href="{{route('insumo.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Nuevo Insumo</i></button></a>
    </div>
    <br>
    <table class="table table-ligth table-striped">
    <thead class="bg-primary">
        <tr>
        <th scope="col">id</th>
        <th scope="col">Codigo</th>
        <th scope="col">Telas</th>
        <th scope="col">Distribuidora</th>
        <th scope="col">Telef. de Distribuidora</th>
        <th scope="col">Operaciones</th>
        </tr>
    </thead>
    @foreach($insumos as $insumo)
    <tr>
        <th scope="row">{{$insumo->id}}</th>
        <td>{{$insumo->codigo}}</td>
        <td>{{$insumo->nombre}}</td>
        <td>{{$insumo->distribuidoras->nombre}}</td>
        <td>{{$insumo->distribuidoras->telefono}}</td>
        <td>
            <a class href="{{route('insumo.edit',$insumo->id)}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"> Editar</i></button></a>
            <i class="fas ">
                <form action="{{route('insumo.destroy',$insumo->id)}}" method="POST">
                {{ csrf_field() }}
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"> Eliminar</i></button>
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