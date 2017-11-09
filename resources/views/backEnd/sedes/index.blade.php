@extends('backLayout.app')
@section('title')
Sede
@stop

@section('content')

    <h1>Sedes <a href="{{ url('sedes/create') }}" class="btn btn-primary pull-right btn-sm">Add New Sede</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblsedes">
            <thead>
                <tr>
                    <th>Idsede</th><th>Descripcion</th><th>Direccion</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($sedes as $item)
                <tr>
                    <td><a href="{{ url('sedes', $item->idsede) }}">{{ $item->idsede }}</a></td>
                    <td>{{ $item->descripcion }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>
                        <a href="{{ url('sedes/' . $item->idsede . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['sedes', $item->idsede],
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
        $('#tblsedes').DataTable({
            columnDefs: [{
                targets: [0],
                visible: true,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
            language: {
            "url": "js/Spanish.json"
        }
        });
    });
</script>
@endsection