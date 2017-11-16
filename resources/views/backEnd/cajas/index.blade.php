@extends('backLayout.app')
@section('title')
Caja
@stop

@section('content')

    <h1>Cajas <a href="{{ url('cajas/create') }}" class="btn btn-primary pull-right btn-sm">Add New Caja</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcajas">
            <thead>
                <tr>
                    <th>Idcaja</th><th>Nombre</th><th>Sede</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cajas as $item)
                <tr>
                    <td><a href="{{ url('cajas', $item->idcaja) }}">{{ $item->idcaja }}</a></td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->descripcion}}</td>
                    <td>
                        <a href="{{ url('cajas/' . $item->idcaja. '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['cajas', $item->idcaja],
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
        $('#tblcajas').DataTable({
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