@extends('backLayout.app')
@section('title')
Notificaciones
@stop

@section('content')

    <h1>Notificaciones</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Idnotificacion</th><th>Descripcion</th><th>Idpersonafk</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                     <td> {{ $notificacione->idnotificacion }} </td><td> {{ $notificacione->descripcion }} </td><td> {{ $notificacione->idpersonafk }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection