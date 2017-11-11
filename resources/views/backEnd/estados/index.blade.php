@extends('backLayout.app')
@section('title')
Estado
@stop

@section('content')

    <h1>Estados <a href="{{ url('estados/create') }}" class="btn btn-primary pull-right btn-sm">Add New Estado</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblestados">
            <thead>
                <tr>
                    <th>Idestado</th><th>Nombre</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($estados as $item)
                <tr>
                    {{--  <td>{{ $item->idestado }}</td>  --}}
                    <td><a href="{{ url('estados', $item->idestado) }}">{{ $item->idestado }}</a></td>
                    <td>{{ $item->nombre }}</td>
                    <td>
                        <a href="{{ url('estados/' . $item->idestado . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['estados', $item->idestado],
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
        $('#tblestados').DataTable({
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