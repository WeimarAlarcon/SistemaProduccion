<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Persona;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::all();
        $personas = Persona::all();
        $clientes = Cliente::get();
        return view('venta.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=Cliente::all();
        return view('venta.create', compact('clientes'));
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
        Venta::create([
            'codigo' => $input['codigo'],
            'fecha' => $input['fecha'],
            'idcliente' => $input['idcliente'],
        ]);
        return redirect(route('venta.index'));
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
    public function edit($id)
    {
        $clientes=Cliente::all();
        //return view('venta.edit', compact('venta', 'clientes'));
        $venta=Venta::findOrFail($id);
        //findOrFail
        return view('venta.edit', compact('venta', 'clientes'));
    }

    /**
     * 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $venta=Venta::findOrFail($id);
        $input = $request->all();
        $venta->codigo=$input['codigo'];
        $venta->fecha=$input['fecha'];
        $venta->idcliente=$input['idcliente'];
        $venta->save();
        return redirect(route('venta.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta=Venta::find($id);
        $venta->delete();
        return redirect(route('venta.index'));
    }
}
