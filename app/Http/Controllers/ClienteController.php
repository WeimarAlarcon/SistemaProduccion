<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
        return view('cliente.index', compact('clientes','texto', 'personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $personas=Persona::all();
        return view('cliente.create', compact('personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $cliente = new Cliente();
        $cliente->celular=$request->get('celular');  
        $cliente->idpersona=$request->get('idpersona');
        $cliente->nombre=$request->get('nombre');  
        $cliente->apellido=$request->get('apellido'); 
        $cliente->save();
        return redirect(route('cliente.index'));
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
    public function edit(Cliente $cliente)
    {
        
        $personas=Persona::all();
        return view('cliente.edit', compact('cliente', 'personas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $input = $request->all();
        $cliente->celular=$input['celular'];
        $cliente->idpersona=$input['idpersona'];
        $cliente->nombre=$input['nombre'];
        $cliente->apellido=$input['apellido'];
        $cliente->save();
        return redirect(route('cliente.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=Cliente::find($id);
        $cliente->delete();
        return redirect(route('cliente.index'));
    }
}
