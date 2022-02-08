<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\DetallePedido;
use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Producto;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallepedidos= DetallePedido::all();
        
        $productos = Producto::all();
        $clientes = Cliente::all();
        $pedidos = Pedido::join('cliente', 'pedido.idcliente', '=', 'cliente.id')
            //->join('cliente', 'pedido.idcliente', '=', 'cliente.id')
            ->select('pedido.*', 'cliente.celular as cliente_celular','cliente.nombre as persona_n', 'cliente.apellido as persona_a')
            ->orderBy('id', 'asc')
            ->get();
        //return view("pedido.index")->withPedidos($pedidos);
        return view('pedido.index', compact('pedidos', 'clientes', 'productos'));
        
        /*
        $detallepedidos= DetallePedido::all();
        $pedidos = Pedido::all();
        $productos = Producto::all();
        $clientes = Cliente::all();
        return view('pedido.index', compact('pedidos', 'clientes', 'productos'));
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view("pedido.create");
        $detallepedidos= DetallePedido::all();
        $pedidos = Pedido::all();
        $productos = Producto::all();
        $clientes = Cliente::all();
        return view('pedido.create', compact('pedidos','clientes','productos','detallepedidos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $input = $request->all();
        Pedido::create([
            'lugar_entrega' => $input['lugar_entrega'],
            'fecha_entrega' => $input['fecha_entrega'],
            'cantidad_total' => $input['cantidad_total'],
            'idcliente' => $input['idcliente'],
        ]);
        return redirect(route('pedido.index'));
*/
        $pedido = new Pedido;
        $pedido->fecha_entrega=$request->get('fecha_entrega');        
        $pedido->lugar_entrega=$request->get('lugar_entrega');
        $pedido->cantidad_total=$request->get('cantidad_total');
        $pedido->idcliente=$request->get('idcliente');
        $pedido->save();

        $detallepedido = new DetallePedido();
        $detallepedido->descripcion=$request->get('descripcion'); 
        $detallepedido->talla=$request->get('talla'); 
        $detallepedido->color=$request->get('color'); 
        $detallepedido->cantidad=$request->get('cantidad'); 
        $detallepedido->idpedido=$pedido->id;
        //$detallepedido->idpedido=$request->get('idpedido');
        $detallepedido->idproducto=$request->get('idproducto');
        $detallepedido->save();

        return redirect(route('pedido.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $detallepedidos= DetallePedido::all();
        $pedidos = Pedido::find($id);
        $productos = Producto::all();
        $clientes = Cliente::all();
        //return view('detallepedido.index', ['pedidos'=>$pedidos]);

        //return view('pedido.show', ['pedidos'=>$pedidos]);
        return view('pedido.show', compact('detallepedidos', 'pedidos', 'productos', 'clientes'));
        //--------------
        //$detallepedido = DetallePedido::find($id);
        
        //return view('pedido.show', compact('detallepedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido, DetallePedido $detallepedido)
    {
        
        $clientes=Cliente::all();
        $personas=Persona::all();
        //$subtipo_cuentas=subtipo_cuentas::all();
        return view('pedido.edit', compact('pedido','clientes', 'personas'));
        //return view('pedido.edit')->withPedido($pedido);
        //return view('pedido.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido, DetallePedido $detallepedido)
    {   
        //$pedido=Pedido::find($id);
        $input = $request->all();
        $pedido->lugar_entrega=$input['lugar_entrega'];
        $pedido->fecha_entrega=$input['fecha_entrega'];
        $pedido->cantidad_total=$input['cantidad_total'];
        $pedido->idcliente=$input['idcliente'];
        $pedido->save();
        /*
        $detallepedido=DetallePedido::find($id);

        $detallepedido->descripcion=$input['descripcion'];
        $detallepedido->talla=$input['talla'];
        $detallepedido->color=$input['color'];
        $detallepedido->cantidad=$input['cantidad'];
        $detallepedido->idpedido=$input['idpedido'];
        $detallepedido->idproducto=$input['idproducto'];
        $detallepedido->save();
        */
        return redirect(route('pedido.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido=Pedido::find($id);
        $pedido->delete();
        return redirect(route('pedido.index'));
    }
}
