<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Persona;
use App\Notificacione;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class NotificacionesController extends Controller
{
    private $personas;
    private $notificaciones;
 
    public function __construct(Persona $personas, Notificacione $notificaciones) {
 
        $this->personas = $personas;
        $this->notificaciones = $notificaciones;
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $notificaciones = Notificacione::all();

        // return view('backEnd.notificaciones.index', compact('notificaciones'));

        $notificaciones = $this->notificaciones->join('personas as persona','persona.idpersona', '=', 'notificaciones.idpersonafk')
                             ->select('notificaciones.*', 'persona.nombre as pern','persona.apellido as pera')
                             ->get();

        // $personas = Persona::get()->pluck('nombre','apellido','idpersona');

        return view('backEnd.notificaciones.index', compact('notificaciones'));
        
    }

    public function index2()
    {
        $notificaciones = $this->notificaciones->join('personas as persona','persona.idpersona', '=', 'notificaciones.idpersonafk')
                             ->select('notificaciones.*', 'persona.nombre as pern','persona.apellido as pera')
                             ->orderby('created_at','desc')
                             ->take(3)
                             ->get();

// echo '<pre>';
// print_r ($notificaciones);
// echo  '</pre>';

        return response()->json([
                'message'=>"success",
                'data'   =>$notificaciones
            ]);

        // return notificaciones;
        // return view('backLayout.topMenu', compact('notificaciones'));
        
        
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // return view('backEnd.notificaciones.create');
        $personas = $this->personas->all();

        
        return View('backEnd.notificaciones.create',compact('personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Notificacione::create($request->all());

        Session::flash('message', 'Notificacione added!');
        Session::flash('status', 'success');

        return redirect('notificaciones');
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
        $notificacione = Notificacione::findOrFail($id);

        return view('backEnd.notificaciones.show', compact('notificacione'));
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
        $notificacione = Notificacione::findOrFail($id);
        $personas = $this->personas->all();

        return view('backEnd.notificaciones.edit', compact('notificacione','personas'));
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
        
        // $notificacione = Notificacione::findOrFail($id);
        // $notificacione->update($request->all());

        $notificacione = $this->notificaciones->findOrFail($id);

        $input = $request->all();

        $notificacione->idnotificacion = $input['idnotificacion'];
        $notificacione->descripcion = $input['descripcion'];
        $notificacione->idpersonafk = $input['idpersonafk'];

        $notificacione->save();

        Session::flash('message', 'Notificacione updated!');
        Session::flash('status', 'success');

        return redirect('notificaciones');

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
        $notificacione = Notificacione::findOrFail($id);

        $notificacione->delete();

        Session::flash('message', 'Notificacione deleted!');
        Session::flash('status', 'success');

        return redirect('notificaciones');
    }

}
