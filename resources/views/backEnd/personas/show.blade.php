@extends('backLayout.app')
@section('title')
Persona
@stop

@section('content')

    <h1>Persona</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Idpersona</th><th>Nombre</th><th>Apellido</th>
                    <th>Telefono</th><th>Correo</th><th>FechaNacimiento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td> {{ $persona->idpersona }} </td><td> {{ $persona->nombre }} </td><td> {{ $persona->apellido }} </td>
                   <td> {{ $persona->telefono }} </td><td> {{ $persona->correo }} </td><td> {{ $persona->fechaNacimiento }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection