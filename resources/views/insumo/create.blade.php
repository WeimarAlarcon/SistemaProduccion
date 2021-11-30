@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Insumos</h1>
@stop

@section('content')
    <form action="{{route('insumo.store')}}" method="POST">
        {{ csrf_field() }}
    <div class="mb-3">
        <label for="codigo" class="form-label">Codigo</label>
        <input type="text" name="codigo" class="form-control">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Tela</label>
        <input type="text" name="nombre" class="form-control">
    </div>
    <div class="mb-3">
        <label for="iddistribuidora" class="form-label">Distribuidora</label>
    </div>
    <div class="mb-3">
        <select name="iddistribuidora" id="iddistribuidora">
            @foreach($distribuidoras as $distribuidora)
            <option value="{{$distribuidora->id}}">{{$distribuidora->nombre}} </option>
            @endforeach
        </select>
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