@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Pedidos</h1>
@stop

@section('content')
<form action="{{route('insumo.update',$insumo->id)}}" method="POST">
    {{ csrf_field() }}
      @method('PUT')
      <div class="mb-3">
        <label for="codigo" class="form-label">Codigo</label>
        <input type="text" name="codigo" class="form-control" id="" value="{{$insumo->codigo}}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Tela</label>
        <input type="text" name="nombre" class="form-control" id="" value="{{$insumo->nombre}}">
    </div>
    <div class="mb-3">
        <label for="iddistribuidora" class="form-label">Cliente</label>
    </div>
    <div class="mb-3">
        <select name="iddistribuidora" id="iddistribuidora" class="form-control">
            @foreach($distribuidoras as $distribuidora)
            @if ($distribuidora->id == $insumo->iddistribuidora)
                <option value="{{$distribuidora->id}}" selected>{{$distribuidora->nombre}}</option>
            @else 
                <option value="{{$distribuidora->id}}" >{{$distribuidora->nombre}}</option>
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