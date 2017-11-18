@extends('backLayout.app')
@section('title')
Create new Notificacione
@stop

@section('content')

    <h1>Create New Notificacione</h1>
    <hr/>

    {!! Form::open(['url' => 'notificaciones', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('idnotificacion') ? 'has-error' : ''}}">
                {!! Form::label('idnotificacion', 'Idnotificacion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('idnotificacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('idnotificacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('idpersonafk') ? 'has-error' : ''}}">
                {!! Form::label('idpersonafk', 'Idpersonafk: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                <select class="form-control m-b" id="idpersonafk" name="idpersonafk" requiered>
                            @foreach ($personas as $selecpersona)
                                <option value="{{$selecpersona->idpersona}}" >{{$selecpersona->nombre }} {{$selecpersona->apellido}}</option>
                            @endforeach
                </select>
                    {{--  {!! Form::number('idpersonafk', null, ['class' => 'form-control']) !!}  --}}
                    {!! $errors->first('idpersonafk', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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