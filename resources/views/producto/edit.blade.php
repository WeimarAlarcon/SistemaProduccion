@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Productos</h1>
@stop

@section('content')
    <form action="{{route('producto.update',$producto->id)}}" method="POST">
      {{ csrf_field() }}
    <div class="form-group">
      @method('PUT')
      <label for="nombre">Nombre de Producto</label>
      <input class="form-control" type="text" name="nombre" value="{{$producto->nombre}}">
    </div>
    <div class="form-group">
      <label for="precio_unitario">Precio Unitario (bs)</label>
      <input class="form-control" type="text" name="precio_unitario" value="{{$producto->precio_unitario}}">
    </div>
      <input class="btn btn-success" type="submit" value="Actualizar">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop