<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Notificacione;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class NotificacionesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $notificaciones = Notificacione::all();

        return view('backEnd.notificaciones.index', compact('notificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.notificaciones.create');
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

        return view('backEnd.notificaciones.edit', compact('notificacione'));
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
        
        $notificacione = Notificacione::findOrFail($id);
        $notificacione->update($request->all());

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
