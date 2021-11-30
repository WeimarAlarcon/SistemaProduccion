@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Clientes</h1>
@stop

@section('content')
<div class="container">
    <div>
        <a href="{{route('cliente.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Nuevo Cliente</i></button></a>
        <a href="{{route('persona.index')}}"><button type="button" class="btn btn-primary"><i class="fas">Datos de Persona</i></button></a> 
    </div><br>
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
            <a class href="{{route('cliente.edit',$cliente->id)}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"> Editar</i></button></a>
            <i class="fas ">
                <form action="{{route('cliente.destroy',$cliente->id)}}" method="POST">
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