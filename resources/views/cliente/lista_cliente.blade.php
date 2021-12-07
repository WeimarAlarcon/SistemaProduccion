@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script type="text/javascript">
        function showContent() {
            element = document.getElementById("content");
            check = document.getElementById("check");
            if (check.checked) {
                element.style.display='block';
            }
            else {
                element.style.display='none';
            }
        }
	</script>
</head>
<body>
    <div class="col-xl-12">
		<form action="{{route('cliente.lista_cliente')}}" method="get">
			<div class="form-group">
				<div class="col-sm-4">
                    <div class="input-group">
                        <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        <span class="input-group-addon"> </span>
                        <input type="submit" class="btn btn-primary" value="Buscar">
                    </div>
				</div> 		
				<div class="col-sm-4 my-1">
					<a href="{{route('register.pricipal')}}" class="btn btn-success"> + Añadir CLiente</a>
				</div>
			</div>
		</form>
    </div>
    <div>
        <a href="{{route('pedido.create')}}"><button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"> Crear Pedido</i></button></a>
    </div><br>
    <table class="table table-ligth table-striped">
    <thead class="bg-info">
        <tr>
        <th scope="col">Selecionar</th>
        <th scope="col">id</th>
        <th scope="col">Fecha Entrega</th>
        <th scope="col">Lugar de Entrega</th>
        <th scope="col">Cantidad Total</th>
        <th scope="col">celular</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Operaciones</th>
        </tr>
    </thead>
    @foreach($pedidos as $pedido)
    <tr>
        <td></td>
        <th scope="row">{{$pedido->id}}</th>
        <td>{{$pedido->fecha_entrega}}</td>
        <td>{{$pedido->lugar_entrega}}</td>
        <td>{{$pedido->cantidad_total}}</td>
        <td>{{$pedido->clientes->celular}}</td>
        <td>{{$pedido->clientes->personas->nombre}}</td>
        <td>{{$pedido->clientes->personas->apellido}}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
