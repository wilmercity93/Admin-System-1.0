@extends('backLayout.app')
@section('title')
Promocione
@stop

@section('content')

    <h1>Promociones <a href="{{ url('promociones/create') }}" class="btn btn-primary pull-right btn-sm">Add New Promocione</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblpromociones">
            <thead>
                <tr>
                    <th>Idpromocion</th><th>Descripcion</th><th>Procentaje</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($promociones as $item)
                <tr>
                    <td><a href="{{ url('promociones', $item->idpromocion) }}">{{ $item->idpromocion }}</a></td><td>{{ $item->descripcion }}</td><td>{{ $item->procentaje }}</td>
                    <td>
                        <a href="{{ url('promociones/' . $item->idpromocion . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['promociones', $item->idpromocion],
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
        $('#tblpromociones').DataTable({
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