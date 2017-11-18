<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tipo;
use App\Persona;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PersonasController extends Controller
{   
    private $tipo;
    private $persona;
 
    public function __construct(Tipo $tipo, Persona $persona) {
 
        $this->tipo = $tipo;
        $this->persona = $persona;
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $personas = Persona::all();

        $personas = $this->persona->join('tipos as tipo','tipo.idtipo', '=', 'personas.idtipofk')
                             ->select('personas.*', 'Tipo.nombre as nombretipo')
                             ->get();

        return view('backEnd.personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tipos = $this->tipo->all();
        return View('backEnd.personas.create',compact('tipos'));

        // return view('backEnd.personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Persona::create($request->all());

        Session::flash('message', 'Persona added!');
        Session::flash('status', 'success');

        return redirect('personas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        $tipos = $this->tipo->all();

        return view('backEnd.personas.show', compact('persona','tipos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // $persona = Persona::findOrFail($id);

        // return view('backEnd.personas.edit', compact('persona'));


        $persona = $this->persona->findOrFail($id);
        $tipos = $this->tipo->all();

        return view('backEnd.personas.edit', compact('persona','tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        // $persona = Persona::findOrFail($id);
        // $persona->update($request->all());

        $persona = $this->persona->findOrFail($id);

        $input = $request->all();

        $persona->idpersona = $input['idpersona'];
        $persona->nombre = $input['nombre'];
        $persona->apellido = $input['apellido'];
        $persona->telefono = $input['telefono'];
        $persona->correo = $input['correo'];
        $persona->fechaNacimiento = $input['fechaNacimiento'];
        $persona->direccion = $input['direccion'];
        $persona->idtipofk = $input['idtipo'];

        $persona->save();

        Session::flash('message', 'Persona updated!');
        Session::flash('status', 'success');

       
        return redirect('personas');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);

        $persona->delete();

        Session::flash('message', 'Persona deleted!');
        Session::flash('status', 'success');

        return redirect('personas');
    }

}
