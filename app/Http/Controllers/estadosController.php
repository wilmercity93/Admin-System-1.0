<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\estado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class estadosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $estados = estado::all();

        return view('backEnd.estados.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        estado::create($request->all());

        Session::flash('message', 'estado added!');
        Session::flash('status', 'success');

        return redirect('estados');
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
        $estado = estado::findOrFail($id);

        return view('backEnd.estados.show', compact('estado'));
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
        $estado = estado::findOrFail($id);

        return view('backEnd.estados.edit', compact('estado'));
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
        
        $estado = estado::findOrFail($id);
        $estado->update($request->all());

        Session::flash('message', 'estado updated!');
        Session::flash('status', 'success');

        return redirect('estados');
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
        $estado = estado::findOrFail($id);

        $estado->delete();

        Session::flash('message', 'estado deleted!');
        Session::flash('status', 'success');

        return redirect('estados');
    }

}
