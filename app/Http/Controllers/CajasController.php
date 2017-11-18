<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Caja;
use App\sede;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CajasController extends Controller
{
    private $sede;
    private $Caja;
 
    public function __construct(sede $sede, Caja $Caja) {
 
        $this->sede = $sede;
        $this->Caja = $Caja;
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Consulta las cajas de cada sede donde pertenecen
        
        $cajas = $this->Caja->join('sedes as sede','sede.idsede', '=', 'cajas.idsedefk')
                             ->select('cajas.*', 'sede.descripcion as descripcion')
                             ->get();

        // $cajas = Caja::all();
        
        // $sedes = sede::get()->pluck('descripcion', 'idsede');

        return view('backEnd.cajas.index', compact('cajas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        // $sedes = sede::get()->pluck('descripcion', 'idsede');

        $sedes = $this->sede->all();

        
        return View('backEnd.cajas.create',compact('sedes'));
        // return view('backEnd.cajas.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Caja::create($request->all());

        Session::flash('message', 'Caja added!');
        Session::flash('status', 'success');

        return redirect('cajas');
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
        $caja = Caja::findOrFail($id);
        $sedes = $this->sede->all();


        return view('backEnd.cajas.show', compact('caja','sedes'));
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
        // $caja = Caja::findOrFail($id);
        // $sedes = sede::get()->pluck('descripcion', 'idsede');

        $caja = $this->Caja->findOrFail($id);
        $sedes = $this->sede->all();

        return view('backEnd.cajas.edit', compact('caja','sedes'));
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
        
        // $caja = Caja::findOrFail($id);
        // $caja->update($request->all());

        $caja = $this->Caja->findOrFail($id);

        $input = $request->all();

        $caja->idcaja = $input['idcaja'];
        $caja->nombre = $input['nombre'];
        $caja->idsedefk = $input['idsede'];

        // $caja->update($request->all());

        $caja->save();

        Session::flash('message', 'Caja updated!');
        Session::flash('status', 'success');

        // if ($request->sedes) {
        //       $user->sedes()->sync([$request->sede]);
        //     }

        return redirect('cajas');
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
        $caja = Caja::findOrFail($id);

        $caja->delete();

        Session::flash('message', 'Caja deleted!');
        Session::flash('status', 'success');

        return redirect('cajas');
    }

}
