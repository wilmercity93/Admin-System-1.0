@extends('backLayout.app')
@section('title')
Notificacione
@stop

@section('content')

    <h1>Notificacione</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Idnotificacion</th><th>Descripcion</th><th>Idpersonapk</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                     <td> {{ $notificacione->idnotificacion }} </td><td> {{ $notificacione->descripcion }} </td><td> {{ $notificacione->idpersonapk }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection