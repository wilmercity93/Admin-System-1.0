@extends('backLayout.app')
@section('title')
Promocione
@stop

@section('content')

    <h1>Promocione</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Idpromocion</th><th>Descripcion</th><th>Procentaje</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $promocione->idpromocion }}</td> <td> {{ $promocione->idpromocion }} </td><td> {{ $promocione->descripcion }} </td><td> {{ $promocione->procentaje }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection