@extends('backLayout.app')
@section('title')
Estado
@stop

@section('content')

    <h1>Estado</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Idestado</th><th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $estado->idestado }} </td><td> {{ $estado->nombre }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection