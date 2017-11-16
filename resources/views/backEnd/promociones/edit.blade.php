@extends('backLayout.app')
@section('title')
Edit Promocione
@stop

@section('content')

    <h1>Edit Promocione</h1>
    <hr/>

    {!! Form::model($promocione, [
        'method' => 'PATCH',
        'url' => ['promociones', $promocione->idpromocion],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('idpromocion') ? 'has-error' : ''}}">
                {!! Form::label('idpromocion', 'Idpromocion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('idpromocion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('idpromocion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('procentaje') ? 'has-error' : ''}}">
                {!! Form::label('procentaje', 'Procentaje: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('procentaje', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('procentaje', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fechainicio') ? 'has-error' : ''}}">
                {!! Form::label('fechainicio', 'Fechainicio: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fechainicio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fechainicio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fechafin') ? 'has-error' : ''}}">
                {!! Form::label('fechafin', 'Fechafin: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fechafin', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fechafin', '<p class="help-block">:message</p>') !!}
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