<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Persona;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $pedidos = Pedido::join('cliente', 'pedido.idcliente', '=', 'cliente.id')
            ->join('persona', 'cliente.idpersona', '=', 'persona.id')
            ->select('pedido.*', 'cliente.celular as cliente_celular','persona.nombre as persona_n', 'persona.apellido as persona_a')
            ->get();
        return view("pedido.index")->withPedidos($pedidos);
        */
        
        $pedidos = Pedido::all();
        $personas = Persona::all();
        $clientes = Cliente::get();
        return view('pedido.index', compact('pedidos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view("pedido.create");
        $clientes=Cliente::all();
        //$personas=Persona::all();
        return view('pedido.create', compact('clientes'));
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
        Pedido::create([
            'lugar_entrega' => $input['lugar_entrega'],
            'fecha_entrega' => $input['fecha_entrega'],
            'cantidad_total' => $input['cantidad_total'],
            'idcliente' => $input['idcliente'],
        ]);
        return redirect(route('pedido.index'));
        /*
        $pedidos = new Pedido();
        $pedidos->lugar_entrega=lugar_entrega;
        $pedidos->fecha_entrega=fecha_entrega;
        $pedidos->cantidad_total = cantidad_total;
        $pedidos->idcliente =idcliente;
        $pedidos->save();
        */
        //return redirect(route('plan_de_cuentas'));
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
    public function edit(Pedido $pedido)
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
    public function update(Request $request, Pedido $pedido)
    {   
        //$pedido=Pedido::find($id);
        $input = $request->all();
        $pedido->lugar_entrega=$input['lugar_entrega'];
        $pedido->fecha_entrega=$input['fecha_entrega'];
        $pedido->cantidad_total=$input['cantidad_total'];
        $pedido->idcliente=$input['idcliente'];
        $pedido->save();
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
