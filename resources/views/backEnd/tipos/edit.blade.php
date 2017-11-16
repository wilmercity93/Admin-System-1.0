@extends('backLayout.app')
@section('title')
Edit Tipo
@stop

@section('content')

    <h1>Edit Tipo</h1>
    <hr/>

    {!! Form::model($tipo, [
        'method' => 'PATCH',
        'url' => ['tipos', $tipo->idtipo],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('idtipo') ? 'has-error' : ''}}">
                {!! Form::label('idtipo', 'Idtipo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('idtipo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('idtipo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection