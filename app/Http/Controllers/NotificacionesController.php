<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Notificacione;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class NotificacionesController extends Controller
{
    private $users;
    private $notificaciones;
 
    public function __construct(User $users, Notificacione $notificaciones) {
 
        $this->users = $users;
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

        $notificaciones = $this->notificaciones->join('users as user','user.id', '=', 'notificaciones.idusersfk')
                             ->select('notificaciones.*', 'user.first_name as usern','user.last_name as usera','user.avatar as avat')
                             ->get();

        // $personas = Persona::get()->pluck('nombre','apellido','idpersona');

        return view('backEnd.notificaciones.index', compact('notificaciones'));
        
    }

    public function index2()
    {
        $notificaciones = $this->notificaciones->join('users as user','user.id', '=', 'notificaciones.idusersfk')
                             ->select('notificaciones.*', 'user.first_name as usern','user.last_name as usera','user.avatar as avat')
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
        $users = $this->users->all();

        
        return View('backEnd.notificaciones.create',compact('users'));
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
        $users = $this->users->all();

        return view('backEnd.notificaciones.edit', compact('notificacione','users'));
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
        $notificacione->idusersfk = $input['idusersfk'];

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
