@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Personas</h1>
@stop

@section('content')
<div class="container">
    <div>
    <a href="{{route('persona.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Registrar Persona</i></button></a>
    </div>
    <br>
    <div>
    <table class="table table-ligth table-striped">
        <thead class="bg-info">
            <tr>
            <th scope="col">id</th>
            <th scope="col">Sexo</th>
            <th scope="col">Operaciones</th>
            </tr>
        </thead>
        @foreach($personas as $persona)
        <tr>
            <th scope="row">{{$persona->id}}</th>
            <td>{{$persona->sexo}}</td>
            <td>
                <a class href="{{route('persona.edit',$persona->id)}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"> Editar</i></button></a>
                <i class="fas ">
                    <form action="{{route('persona.destroy',$persona->id)}}" method="POST">
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