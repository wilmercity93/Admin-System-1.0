@extends('backLayout.app')
@section('title')
Sede
@stop

@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
    <h1>Sede</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Idsede</th><th>Descripcion</th><th>Direccion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $sede->idsede }} </td><td> {{ $sede->descripcion }} </td><td> {{ $sede->direccion }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
            <a href="{{route('sedes.index')}}" class="btn btn-default">Return to all sedes</a>


@endsection