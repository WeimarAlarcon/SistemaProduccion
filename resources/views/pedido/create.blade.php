@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Pedidos</h1>
@stop

@section('content')
    <form action="{{route('pedido.store')}}" method="POST">
    {{ csrf_field() }}

    <div class="row">
        <div class="col">
            <div class="mb-3">
            <label for="idcliente" class="form-label">Cliente</label>
                <select class="js-example-basic-single js-states form-control" name="idcliente" id="idcliente">
                    <option value=""></option>
                    @foreach($clientes as $cliente)
                    <option value="{{$cliente->id}}">{{$cliente->nombre}} {{$cliente->apellido}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="lugar_entrega" class="form-label">Lugar de Entrega</label>
                <input type="text" name="lugar_entrega" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
                <input type="date" name="fecha_entrega" class="form-control">
            </div>
            <div class="mb-3">
                <label for="cantidad_total" class="form-label">Cantidad Total</label>
                <input type="number" name="cantidad_total" id="cantidad_total" class="form-control">
            </div>
        </div>
    </div>

    
    
    <div class="card">
        <h5 class="card-header">Detalle </h5>
        <div class="card-body">
                <div id="lista" class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="idproducto" class="form-label">Producto</label>
                            <select name="idproducto" id="idproducto" class="form-control">
                                <option value=" "> </option>
                                @foreach($productos as $producto)
                                    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col" hidden>
                        <div class="mb-3">
                            <label for="idpedido" class="form-label">Pedido</label>
                            <select name="idpedido" id="idpedido" class="form-control">
                                <option value=" "> </option>
                                @foreach($pedidos as $pedido)
                                    <option value="{{$pedido->id}}">{{$pedido->id}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="talla" class="form-label">Talla</label>
                            <input type="text" name="talla" id="talla" class="form-control" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" name="color" class="form-control" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control" onchange="sumar(this.value);">
                        </div>
                    </div>
                </div>
                <template id="template-requirement">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <select name="idproducto" id="idproducto" class="form-control">
                                    <option value=" "> </option>
                                    @foreach($productos as $producto)
                                        <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col" hidden>
                            <div class="mb-3">
                                <select name="idpedido" id="idpedido" class="form-control">
                                    <option value=" "> </option>
                                    @foreach($pedidos as $pedido)
                                        <option value="{{$pedido->id}}">{{$pedido->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <input type="text" name="talla" id="talla" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <input type="text" name="color" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <input type="number" name="cantidad" class="form-control" onchange="sumar(this.value);">
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <button type="button" class="btn btn-primary" id="add-requirement" >+</button>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>

    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
        //documento.addEventListener('pedido:load'), function() 
        //$('.js-example-basic-single').select2();
        //})
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
    <script>
        
        $(function () {
            $('#add-requirement').on('click', addRequerement);
            $(document).on('click', '.btn-remove', removeElement);
        });
        function addRequerement() {
            var requirement = $('#template-requirement').html();
            $('#lista').append(requirement);
        }

        function removeElement() {
            $(this).parent().remove();
        }
    </script>
    <script>
        function sumar(valor) {
            //var total = 0;	
            valor = parseInt(valor); // Convertir el valor a un entero (número).
            total = document.getElementById('cantidad_total').value;
            // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
            total = (total == null || total == undefined || total == "") ? 0 : total;
            /* Esta es la suma. */
            total = (parseInt(total) + parseInt(valor));
            // Colocar el resultado de la suma en el control "div".
            document.getElementById('cantidad_total').value = total;
        }
    </script>
@stop
