@extends('backLayout.app')
@section('title')
Tipo
@stop

@section('content')

    <h1>Tipos <a href="{{ url('tipos/create') }}" class="btn btn-primary pull-right btn-sm">Add New Tipo</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbltipos">
            <thead>
                <tr>
                    <th>Idtipo</th><th>Nombre</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipos as $item)
                <tr>
                    <td><a href="{{ url('tipos', $item->idtipo) }}">{{ $item->idtipo }}</a></td><td>{{ $item->nombre }}</td>
                    <td>
                        <a href="{{ url('tipos/' . $item->idtipo . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['tipos', $item->idtipo],
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
        $('#tbltipos').DataTable({
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