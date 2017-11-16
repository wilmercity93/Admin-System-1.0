<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tipo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TiposController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tipos = Tipo::all();

        return view('backEnd.tipos.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Tipo::create($request->all());

        Session::flash('message', 'Tipo added!');
        Session::flash('status', 'success');

        return redirect('tipos');
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
        $tipo = Tipo::findOrFail($id);

        return view('backEnd.tipos.show', compact('tipo'));
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
        $tipo = Tipo::findOrFail($id);

        return view('backEnd.tipos.edit', compact('tipo'));
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
        
        $tipo = Tipo::findOrFail($id);
        $tipo->update($request->all());

        Session::flash('message', 'Tipo updated!');
        Session::flash('status', 'success');

        return redirect('tipos');
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
        $tipo = Tipo::findOrFail($id);

        $tipo->delete();

        Session::flash('message', 'Tipo deleted!');
        Session::flash('status', 'success');

        return redirect('tipos');
    }

}
