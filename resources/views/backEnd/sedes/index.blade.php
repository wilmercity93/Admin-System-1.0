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
    <h1>Sedes <a href="{{ url('sedes/create') }}" class="btn btn-primary pull-right btn-sm">Add New Sede</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover"  id="tblsedes">
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
   $('#tblsedes').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                text: 'Print all'
            },
            {
                  extend: "copy",
                  text: "copy"
                },
                 {
                  extend: "csv",
                  text: "csv"
                },
                {
                  extend: "excel",
                  text: "excel"
                },
                {
                  extend: "pdfHtml5",
                  text: "pdf"
                },
            {
                extend: 'print',
                text: 'Print selected',
                
            }
        ],
        select: true
    } );
    });
</script>
@endsection