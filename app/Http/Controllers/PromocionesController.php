<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Promocione;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PromocionesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $promociones = Promocione::all();

        return view('backEnd.promociones.index', compact('promociones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.promociones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Promocione::create($request->all());

        Session::flash('message', 'Promocione added!');
        Session::flash('status', 'success');

        return redirect('promociones');
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
        $promocione = Promocione::findOrFail($id);

        return view('backEnd.promociones.show', compact('promocione'));
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
        $promocione = Promocione::findOrFail($id);

        return view('backEnd.promociones.edit', compact('promocione'));
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
        
        $promocione = Promocione::findOrFail($id);
        $promocione->update($request->all());

        Session::flash('message', 'Promocione updated!');
        Session::flash('status', 'success');

        return redirect('promociones');
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
        $promocione = Promocione::findOrFail($id);

        $promocione->delete();

        Session::flash('message', 'Promocione deleted!');
        Session::flash('status', 'success');

        return redirect('promociones');
    }

}
