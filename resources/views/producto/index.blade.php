@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')

    <table class="table">
		<thead class="thead-dark">
					<th scope="col">id</th>
					<th scope="col">Nombre</th>
					<th scope="col">Precio Unitario(BS)</th>
                    <th scope="col">Operaciones</th>
		</thead>
		@foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->precio_unitario}}</td>
                <td><button type="button" class="btn btn-outline-success"><a class="btn " href="{{route('producto.edit',$producto->id)}}">Editar</a></button>
                    <button type="button" class="btn btn-outline-warning">
                    <form action="{{route('producto.destroy',$producto->id)}}" method="POST">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <input class="btn " type="submit" value="eliminar">
                    </form>
                    </button>
                </td>
            </tr>
        @endforeach
	</table>
    <button type="button" class="btn btn-outline-info"><a href="{{route('producto.create')}}">Crear</a></button>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop