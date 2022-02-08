@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Clientes</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xl-12">
        <form action="{{route('listacliente.index')}}" method="get">
            <div class="form-row">
                <div class="col-sm-">
                    <label for="cliente">Cliente:</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="texto">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search">&nbsp;Buscar</i></button>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <a href="{{route('listacliente.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Nuevo Cliente</i></button></a>
                </div>
            </div>
        </form>
    </div>
</div>
<div>
    
    <br>
    <table class="table table-ligth table-striped">
    <thead class="bg-primary">
        <tr>
        <th scope="col">id</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Celular</th>
        <th scope="col">Sexo</th>
        <th scope="col">Seleccionar</th>
        </tr>
    </thead>
    @if(count($clientes)<=0)
        <tr>
            <td colspan="8">No hay resultados</td>
        </tr>
    @else

    @foreach($clientes as $cliente)
        <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellido}}</td>
            <td>{{$cliente->celular}}</td>
            <td>@php if($cliente->idpersona == 1 ){
				    echo "Masculino";
				}else{
					echo "Femenino";
				}
                @endphp 
            </td>
            <td>
                <a class href="{{route('listacliente.edit',$cliente->id)}}"><button type="button" class="btn btn-info"><i class="fas fa-check"> Seleccionar</i></button></a>
            </td>
        </tr>
    @endforeach

    @endif
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop