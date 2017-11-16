@extends('backLayout.app')
@section('title')
Tipo
@stop

@section('content')

    <h1>Tipo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Idtipo</th><th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $tipo->idtipo }}</td> <td> {{ $tipo->idtipo }} </td><td> {{ $tipo->nombre }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection