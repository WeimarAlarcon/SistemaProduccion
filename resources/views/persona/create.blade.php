@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Personas</h1>
@stop

@section('content')
    <form action="{{route('persona.store')}}" method="POST">
        {{ csrf_field() }}
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombres</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellidos</label>
        <input type="text" name="apellido" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div>
        <label for="sexo">Sexo</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" name="sexo" type="checkbox" value="Masculino" id="flexCheckDefault">
        <label class="form-check-label" for="sexo">
            Masculino
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" name="sexo" type="checkbox" value="Femenino" id="flexCheckChecked">
        <label class="form-check-label" for="sexo">
            Femenino
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    <!--
    <form action="{{route('persona.store')}}" method="POST">
      {{ csrf_field() }}
      <label for="nombre">nombre</label>
      <input type="text" name="nombre" id=""> <br>
      <label for="apellido">apellidos</label>
      <input type="text" name="apellido" id=""> <br>

      <label for="sexo">Sexo</label>
      <input type="radio" name="sexo"  checked value="F">Femenino
      <input type="radio" name="sexo"   value="M">Masculino  
      <br>

       <input type="submit" value="Registrar">

    </form>
    -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
