@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Clientes</h1>
@stop

@section('content')
    <form action="{{route('cliente.update',$cliente->id)}}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div class="mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="number" name="celular" class="form-control" value="{{$cliente->celular}}">
        </div>
        <div class="mb-3">
            <label for="idpersona" class="form-label">Cliente</label>
        </div>
        <div class="mb-3">
            <select name="idpersona" id="idpersona">
                @foreach($personas as $persona)
                @if ($persona->id == $cliente->idpersona)
                    <option value="{{$persona->id}}" selected>  {{$persona->nombre}} {{$persona->apellido}}</option>
                @else 
                    <option value="{{$persona->id}}" >  {{$persona->nombre}} {{$persona->apellido}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
