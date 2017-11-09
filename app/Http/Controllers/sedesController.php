<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\sede;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class sedesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sedes = sede::all();

        return view('backEnd.sedes.index', compact('sedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.sedes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        sede::create($request->all());

        Session::flash('message', 'sede added!');
        Session::flash('status', 'success');

        return redirect('sedes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idsede
     *
     * @return Response
     */
    public function show($idsede)
    {
        $sede = sede::findOrFail($idsede);

        return view('backEnd.sedes.show', compact('sede'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idsede
     *
     * @return Response
     */
    public function edit($idsede)
    {
        $sede = sede::findOrFail($idsede);

        return view('backEnd.sedes.edit', compact('sede'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $idsede
     *
     * @return Response
     */
    public function update($idsede, Request $request)
    {
        
        $sede = sede::findOrFail($idsede);
        $sede->update($request->all());

        Session::flash('message', 'sede updated!');
        Session::flash('status', 'success');

        return redirect('sedes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idsede
     *
     * @return Response
     */
    public function destroy($idsede)
    {
        $sede = sede::findOrFail($idsede);

        $sede->delete();

        Session::flash('message', 'sede deleted!');
        Session::flash('status', 'success');

        return redirect('sedes');
    }

}
