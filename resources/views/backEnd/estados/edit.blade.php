@extends('backLayout.app')
@section('title')
Edit Estado
@stop

@section('content')

    <h1>Edit Estado</h1>
    <hr/>

    {!! Form::model($estado, [
        'method' => 'PATCH',
        'url' => ['estados', $estado->idestado],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('idestado') ? 'has-error' : ''}}">
                {!! Form::label('idestado', 'Idestado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('idestado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('idestado', '<p class="help-block">:message</p>') !!}
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