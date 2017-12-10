@extends('backLayout.app')
@section('title')
Notificacione
@stop

@section('content')

    <h1>Notificaciones <a href="{{ url('notificaciones/create') }}" class="btn btn-primary pull-right btn-sm">Add New Notificacione</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblnotificaciones">
            <thead>
                <tr>
                   <th>Idnotificacion</th><th>Descripcion</th><th>Usuario</th><th>Imagen</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($notificaciones as $item)
                <tr>
                    <td><a href="{{ url('notificaciones', $item->idnotificacion) }}">{{ $item->idnotificacion }}</a></td>
                    <td>{{ $item->descripcion }}</td>
                    <td style="width: 15%;">{{ $item->usern }} {{ $item->usera }}</td>
                    <td><img src="{{ URL::to('/') }}/images/{{ $item->avat}}" style="width: 15%;height: 10%;" alt="..." ></td>
                    <td style="width: 15%;">
                        <a href="{{ url('notificaciones/' . $item->idnotificacion . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['notificaciones', $item->idnotificacion],
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
        $('#tblnotificaciones').DataTable({
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