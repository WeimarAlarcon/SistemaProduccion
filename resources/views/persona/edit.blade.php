@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Personas</h1>
@stop

@section('content')
<form action="{{route('persona.update',$persona->id)}}" method="POST">
    {{ csrf_field() }}
      @method('PUT')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombres</label>
        <input type="text" name="nombre" class="form-control" value="{{$persona->nombre}}">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellidos</label>
        <input type="text" name="apellido" class="form-control" id="exampleInputPassword1" value="{{$persona->apellido}}">
    </div>
    <div>
        <label for="sexo">Sexo</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" name="sexo" type="checkbox" value="Masculino" id="flexCheckDefault" {{$persona->sexo=='Masculino'?'checked':''}} >
        <label class="form-check-label" for="sexo">
            Masculino
        </label> 
    </div>
    <div class="form-check">
        <input class="form-check-input" name="sexo" type="checkbox" value="Femenino" id="flexCheckChecked" {{$persona->sexo=='Femenino'?'checked':''}}>
        <label class="form-check-label" for="sexo">
            Femenino
        </label>
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    </form>

    <!--
    <form action="{{route('persona.update',$persona->id)}}" method="POST">
      {{ csrf_field() }}
      @method('PUT')
      <label for="nombre">nombre</label>
      <input class="form-control" type="text" name="nombre" value="{{$persona->nombre}}"> <br>
      <label for="apellido">apellidos</label>
      <input class="form-control" type="text" name="apellido" value="{{$persona->apellido}}"> <br>
      <label for="sexo">Sexo</label>
      <input class="form-check-input" type="radio" name="sexo"  {{$persona->sexo=='F'?'checked':''}} value="F">Femenino
      <input class="form-check-input" type="radio" name="sexo"  {{$persona->sexo=='M'?'checked':''}} value="M">Masculino  
      <br>
      <input class="btn btn-success" type="submit" value="Actualizar">
    </form>
    -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
