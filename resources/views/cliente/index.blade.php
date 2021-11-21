@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Clientes</h1>
@stop

@section('content')
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Celular</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Operaciones</th>
        </tr>
    </thead>
    @foreach($clientes as $cliente)
    <tbody>
        <tr>
        <th scope="row">{{$cliente->id}}</th>
        <td>{{$cliente->celular}}</td>
        <td>{{$cliente->personas->nombre}}</td>
        <td>{{$cliente->personas->apellido}}</td>
        <!--
        <td>{{$cliente->persona_n}}</td>
        <td>{{$cliente->persona_a}}</td>
        -->
        <td>
        <button type="button" class="btn btn-outline-success"><a class="btn " href="{{route('cliente.edit',$cliente->id)}}">Editar</a></button>
            <button type="button" class="btn btn-outline-warning">
                <form action="{{route('cliente.destroy',$cliente->id)}}" method="POST">
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
    <a href="{{route('cliente.create')}}">Crear</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop