<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Persona;
use DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        $personas = Persona::get();
        return view('cliente.index', compact('clientes'));

        /*
        //$personas = Persona::all();
        $clientes = Cliente::join('persona', 'cliente.idpersona', '=', 'persona.id')
            ->select('cliente.*', 'persona.nombre as persona_n', 'persona.apellido as persona_a')
            ->get();
        return view("cliente.index")->withClientes($clientes);
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
        $personas=Persona::all();
        //$personas=Persona::all();
        return view('cliente.create', compact('personas'));
        //return view("cliente.create");
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
        $cliente->save();
        return redirect(route('cliente.index'));
        /*
        $input = $request->all();
        Cliente::create([
            'celular' => $input['celular'],
            'idpersona' => $input['idpersona'],
        ]);
        return redirect(route('pedido.index'));
*/
        /*
        $clientes = new Cliente;
        $clientes->celular = $request->celular;
        $clientes->idpersona = $request->idpersona;
        $clientes->save();
        return redirect(route('cliente.index'));
        */
        /*
        $personas = Persona::all();
        $clientes = Cliente::all();
        $input = $request->all();
        Cliente::create([
            'celular' => $input['celular'],
            'idpersona' => $input['idpersona'],
        ]);
        return redirect(route('cliente.index'));
        */
        /*
        $input = $request->all();
        Cliente::create([
            'celular' => Input::get('celular'),
            'idpersona' => Input::get('idpersona')  
        ]);
        return redirect(route('cliente.index'));
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
        //return view('cliente.edit')->withCliente($cliente)->with(array('persona' => $persona));
        //return view('cliente.edit',compact('cliente','persona'));
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
