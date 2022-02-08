@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Productos</h1>
@stop

@section('content')
    <form action="{{route('producto.store')}}" method="POST">
    <div class="form-group">
      {{ csrf_field() }}
      <label for="nombre" class="form-label">Nombre de Producto</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="precio_unitario">Precio Unitario (BS)</label>
      <input type="text" name="precio_unitario" id="" class="form-control" required>
    </div>
      <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop