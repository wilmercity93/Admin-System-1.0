@extends('backLayout.app')
@section('title')
Sede
@stop

@section('content')

    <h1>Sede</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Idsede</th><th>Descripcion</th><th>Direccion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $sede->id }}</td> <td> {{ $sede->idsede }} </td><td> {{ $sede->descripcion }} </td><td> {{ $sede->direccion }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection