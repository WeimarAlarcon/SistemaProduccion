<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produccion;
use App\Models\Pedido;
use App\Models\DetallePedido;
use App\Models\Insumo;

class ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producciones = Produccion::all();
        $pedidos = Pedido::get();
        $detallepedidos = DetallePedido::get();
        $insumos = Insumo::get();
        return view('produccion.index', compact('producciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedidos = Pedido::all();
        $insumos = Insumo::all();
        return view('produccion.create', compact('pedidos', 'insumos'));
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
        Produccion::create([
            'fecha_inicio' => $input['fecha_inicio'],
            'idpedido' => $input['idpedido'],
            'idinsumo' => $input['idinsumo'],
        ]);
        return redirect(route('produccion.index'));
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
    public function edit(Produccion $produccion)
    {
        $pedidos = Pedido::all();
        $insumos = Insumo::all();
        return view('produccion.edit', compact('produccion', 'pedidos', 'insumos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produccion $produccion)
    {
        $input = $request->all();
        $produccion->fecha_inicio=$input['fecha_inicio'];
        $produccion->idpedido=$input['idpedido'];
        $produccion->idinsumo=$input['idinsumo'];
        $produccion->save();
        return redirect(route('produccion.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produccion=Produccion::find($id);
        $produccion->delete();
        return redirect(route('produccion.index'));
    }
}
