<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallePedido;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Producto;

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
        $pedidos = Pedido::get();
        $clientes = Cliente::get();
        $productos = Producto::get();
        return view('detallepedido.index', compact('detallepedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$detallepedidos = DetallePedido::all();
        $pedidos=Pedido::all();
        $productos=Producto::all();
        return view('detallepedido.create', compact('pedidos', 'productos'));
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
        return redirect(route('detallepedido.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('detallepedido.edit', compact('detallepedido','productos', 'pedidos'));
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
