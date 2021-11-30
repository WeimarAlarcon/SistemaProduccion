<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insumo;
use App\Models\Distribuidora;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumos = Insumo::all();
        $distribuidoras = Distribuidora::all();
        return view("insumo.index", compact('insumos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distribuidoras=Distribuidora::all();
        return view('insumo.create', compact('distribuidoras'));
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
        Insumo::create([
            'codigo' => $input['codigo'],
            'nombre' => $input['nombre'],
            'iddistribuidora' => $input['iddistribuidora'],
        ]);
        return redirect(route('insumo.index'));
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
    public function edit(Insumo $insumo)
    {
        $distribuidoras=Distribuidora::all();
        return view('insumo.edit', compact('insumo','distribuidoras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insumo $insumo)
    {
        $input = $request->all();
        $insumo->codigo=$input['codigo'];
        $insumo->nombre=$input['nombre'];
        $insumo->iddistribuidora=$input['iddistribuidora'];
        $insumo->save();
        return redirect(route('insumo.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insumo=Insumo::find($id);
        $insumo->delete();
        return redirect(route('insumo.index'));
    }
}
