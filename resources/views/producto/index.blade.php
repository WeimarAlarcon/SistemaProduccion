@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
<div class="container">
    <div>
        <a href="{{route('producto.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Nuevo Producto</i></button></a>
    </div>
    <br>
    <table class="table table-ligth table-striped">
		<thead class="bg-info">
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
                <td>
                    <a class href="{{route('producto.edit',$producto->id)}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"> Editar</i></button></a>
                        <i class="fas ">
                        <form action="{{route('producto.destroy',$producto->id)}}" method="POST">
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