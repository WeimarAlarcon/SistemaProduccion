<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleVenta;
use App\Models\Pedido;
use App\Models\Venta;
use App\Models\Producto;
use App\Models\Cliente;

class DetalleVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleventas = DetalleVenta::all();
        $ventas = Venta::get();
        $pedidos = Pedido::get();
        $productos = Producto::get();
        return view('detalleventa.index', compact('detalleventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventas=Venta::all();
        $productos=Producto::all();
        $pedidos=Pedido::all();
        return view('detalleventa.create', compact('ventas', 'productos', 'pedidos'));
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
        DetalleVenta::create([
            'idpedido' => $input['idpedido'],
            'precio_total' => $input['precio_total'],
            'idventa' => $input['idventa'],
            'idproducto' => $input['idproducto'],
        ]);
        return redirect(route('detalleventa.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleventas = DetalleVenta::find($id);
        $ventas = Venta::with('id')->where('idventa', $idventa)->firstOrfail();
        return view('detalleventa.show', compact('detalleventas', 'ventas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleventa=DetalleVenta::findOrFail($id);
        $productos=Producto::all();
        $pedidos=Pedido::all();
        $ventas=Venta::all();
        return view('detalleventa.edit', compact('detalleventa','productos', 'pedidos', 'ventas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detalleventa=DetalleVenta::findOrFail($id);
        $input = $request->all();
        $detalleventa->idpedido=$input['idpedido'];
        $detalleventa->precio_total=$input['precio_total'];
        $detalleventa->idventa=$input['idventa'];
        $detalleventa->idproducto=$input['idproducto'];
        $detalleventa->save();
        return redirect(route('detalleventa.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleventa=DetalleVenta::find($id);
        $detalleventa->delete();
        return redirect(route('detalleventa.index'));
    }
}
