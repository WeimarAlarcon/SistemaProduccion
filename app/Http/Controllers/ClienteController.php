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
        $cliente = Cliente::get();
    	$cliente = Persona::find($id)->clientes;
    	return view('cliente.index', ['cliente' => $cliente]);
        */

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
        return view("cliente.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
            $persona = new Persona;
            $persona->nombre=$request->get('nombre');        
            $persona->apellido=$request->get('apellido');
            $persona->sexo=$request->get('sexo');
            $persona->save();

//(Hasta este momento se hace la inserción del nombre y apellido, el id del autor se autogenera,revisar el modelo autor ahí se establece que el campo **protected $primaryKey='id';** es el campo primario se supone que en tu base de datos ese atributo debe ser autoincremental)

              $cliente = new Cliente();

              $cliente->celular=$request->get('celular');  
              //$cliente->categoria=$request->get('categoria_libro');
              $cliente->idpersona=$persona->id;
              $cliente->save();

//(Suponiendo que la tabla Libro es la que va a heredar la clave foránea del autor, date cuenta de lo siguiente. el código **$cliente->idpersona=$persona->id;** dice que va a insertar en el atributo **id_autor** que se encuentra en la tabla Libro(Clave foránea) va a cojer el id que se genero con la primera inserción). así de fácil y sencillo con las inserciones en larvel.

          //return redirect::to('libros');
          return redirect(route('cliente.index'));

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
        
        $cliente = new Cliente;
        $clientes = $cliente->find($id);
        $personas = Persona::get();
        return view("cliente.index", ['clientes' => $clientes], ['personas' => $personas] );
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=Cliente::find($id);
        $persona=Persona::ordeyBy('id','DESC')->get();
        return view('cliente.edit')->withCliente($cliente)->with(array('persona' => $persona));
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
        $cliente=Cliente::find($id);
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
