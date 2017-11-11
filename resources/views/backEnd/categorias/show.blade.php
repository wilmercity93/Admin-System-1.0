@extends('backLayout.app')
@section('title')
Categoria
@stop

@section('content')

    <h1>Categoria</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Idcategoria</th><th>Nombre</th><th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                     <td> {{ $categoria->idcategoria }} </td><td> {{ $categoria->nombre }} </td><td> {{ $categoria->descripcion }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection