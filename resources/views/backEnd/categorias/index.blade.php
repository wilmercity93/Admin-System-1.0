@extends('backLayout.app')
@section('title')
Categoria
@stop

@section('content')

    <h1>Categorias <a href="{{ url('categorias/create') }}" class="btn btn-primary pull-right btn-sm">Add New Categoria</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcategorias">
            <thead>
                <tr>
                    <th>Idcategoria</th><th>Nombre</th><th>Descripcion</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categorias as $item)
                <tr>
                    <td><a href="{{ url('categorias', $item->idcategoria) }}">{{ $item->idcategoria }}</a></td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>
                        <a href="{{ url('categorias/' . $item->idcategoria . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['categorias', $item->idcategoria],
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
        $('#tblcategorias').DataTable({
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