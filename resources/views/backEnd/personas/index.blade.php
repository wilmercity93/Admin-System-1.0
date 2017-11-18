@extends('backLayout.app')
@section('title')
Persona
@stop

@section('content')

    <h1>Personas <a href="{{ url('personas/create') }}" class="btn btn-primary pull-right btn-sm">Add New Persona</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblpersonas">
            <thead>
                <tr>
                    <th>Idpersona</th><th>Nombre</th><th>Apellido</th>
                    <th>telefono</th><th>correo</th><th>fechaNacimiento</th>
                    <th>direccion</th><th>idtipofk</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($personas as $item)
                <tr>
                    <td><a href="{{ url('personas', $item->idpersona) }}">{{ $item->idpersona }}</a></td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->apellido }}</td>
                    <td> {{ $item->telefono }}</td>
                    <td> {{ $item->correo }}</td>
                    <td> {{ $item->fechaNacimiento }}</td>
                   <td> {{ $item->direccion }} </td>
                   <td> {{ $item->nombretipo }} </td>
                    <td>
                        <a href="{{ url('personas/' . $item->idpersona . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['personas', $item->idpersona],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblpersonas').DataTable({
            columnDefs: [{
                targets: [0],
                visible: true,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection