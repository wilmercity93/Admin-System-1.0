@extends('backLayout.app')
@section('title')
Caja
@stop

@section('content')

    <h1>Caja</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Idcaja</th><th>Nombre</th><th>Idsedefk</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $caja->idcaja }} </td><td> {{ $caja->nombre }} </td><td> {{ $caja->idsedefk }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection