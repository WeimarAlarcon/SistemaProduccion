@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Personas</h1>
@stop

@section('content')
    <div>
    <button type="submit" class="btn btn-dark"><a href="{{route('persona.create')}}">Registrar Personas</a></button>
    </div>
    <br>
    <div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Sexo</th>
        <th scope="col">Operaciones</th>
        </tr>
    </thead>
    @foreach($personas as $persona)
    <tbody>
        <tr>
        <th scope="row">{{$persona->id}}</th>
        <td>{{$persona->nombre}}</td>
        <td>{{$persona->apellido}}</td>
        <td>{{$persona->sexo}}</td>
        <td>
            <button type="button" class="btn btn-outline-success"><a class="btn " href="{{route('persona.edit',$persona->id)}}">Editar</a></button>
                    <button type="button" class="btn btn-outline-warning">
                    <form action="{{route('persona.destroy',$persona->id)}}" method="POST">
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
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop