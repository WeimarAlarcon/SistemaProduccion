<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;

class ListaClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Cliente $cliente)
    {
        $texto=trim($request->get('texto'));
        //$clientes = Cliente::all();
        $personas = Persona::get();
        $clientes=DB::table('cliente')
        ->select('id','nombre','apellido','celular','idpersona')
        ->where('apellido','LIKE','%'.$texto.'%')
        ->orwhere('nombre','LIKE','%'.$texto.'%')
        ->orWhere('celular','LIKE','%'.$texto.'%')
        ->orderBy('id','asc')
        ->paginate(50);
        return view('listacliente.index', compact('clientes','texto', 'personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $personas=Persona::all();
        return view('listacliente.edit', compact('cliente', 'personas'));
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
        $input = $request->all();
        $cliente->celular=$input['celular'];
        $cliente->idpersona=$input['idpersona'];
        $cliente->nombre=$input['nombre'];
        $cliente->apellido=$input['apellido'];
        $cliente->save();
        return redirect(route('listacliente.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
