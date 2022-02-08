<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VistadetalleP;
use App\Models\DetallePedido;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class DetallePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallepedidos = DetallePedido::all();
        //$vistadetallepedidos = VistadetalleP::all();
        $clientes = Cliente::all();
        $pedidos = Pedido::all();
        $productos = Producto::all();
        return view('detallepedido.index', compact('detallepedidos', 'pedidos',  'productos', 'clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=Cliente::all();
        $detallepedidos = DetallePedido::all();
        $pedidos=Pedido::all();
        $productos=Producto::all();
        return view('detallepedido.create', compact('detallepedidos', 'pedidos', 'productos', 'clientes'));
        //return view('pedido.show', compact('detallepedidos', 'pedidos', 'productos', 'clientes'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        DetallePedido::create([
            'descripcion' => $input['descripcion'],
            'talla' => $input['talla'],
            'color' => $input['color'],
            'cantidad' => $input['cantidad'],
            'idpedido' => $input['idpedido'],
            'idproducto' => $input['idproducto'],
        ]);
        return redirect(route('pedido.index'));
        
        /*
        $pedido = new Pedido;
        $pedido->fecha_entrega=$request->get('fecha_entrega');        
        $pedido->lugar_entrega=$request->get('lugar_entrega');
        $pedido->cantidad_total=$request->get('cantidad_total');
        $pedido->save();

        $detallepedido = new DetallePedido();
        $detallepedido->talla=$request->get('talla'); 
        $detallepedido->color=$request->get('color'); 
        $detallepedido->cantidad=$request->get('cantidad'); 
        //$cliente->categoria=$request->get('categoria_libro');
        //$detallepedido->idpedido=$pedido->id;
        $detallepedido->idpedido=$request->get('idpedido');
        $detallepedido->idproducto=$request->get('idproducto');
        $detallepedido->save();
        return redirect(route('detallepedido.index'));
        //return redirect(route('detallepedido.show'));
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$detallepedidos = DetallePedido::where('id', 1)->get()
        $detallepedidos = DetallePedido::find($id);
        $pedidos = Pedido::with('id')->where('idpedido', $idpedido)->firstOrfail();
        $productos = Producto::all();
        return view('detallepedido.show', compact('detallepedidos', 'pedidos', 'productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallePedido $detallepedido)
    {
        $productos=Producto::all();
        $pedidos=Pedido::all();
        $clientes=Cliente::all();
        return view('detallepedido.edit', compact('detallepedido','productos', 'pedidos', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallePedido $detallepedido)
    {
        $input = $request->all();
        $detallepedido->descripcion=$input['descripcion'];
        $detallepedido->talla=$input['talla'];
        $detallepedido->color=$input['color'];
        $detallepedido->cantidad=$input['cantidad'];
        $detallepedido->idpedido=$input['idpedido'];
        $detallepedido->idproducto=$input['idproducto'];
        $detallepedido->save();
        return redirect(route('detallepedido.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detallepedido=DetallePedido::find($id);
        $detallepedido->delete();
        return redirect(route('detallepedido.index'));
    }
}
