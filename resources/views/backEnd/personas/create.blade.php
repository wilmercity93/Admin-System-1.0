@extends('backLayout.app')
@section('title')
Create new Persona
@stop

@section('content')

    <h1>Create New Persona</h1>
    <hr/>

    {!! Form::open(['url' => 'personas', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('idpersona') ? 'has-error' : ''}}">
                {!! Form::label('idpersona', 'Idpersona: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('idpersona', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('idpersona', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
                {!! Form::label('apellido', 'Apellido: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
                {!! Form::label('telefono', 'Telefono: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
                {!! Form::label('correo', 'Correo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('correo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fechaNacimiento') ? 'has-error' : ''}}">
                {!! Form::label('fechaNacimiento', 'Fechanacimiento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fechaNacimiento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fechaNacimiento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
                {!! Form::label('direccion', 'Direccion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('idtipofk') ? 'has-error' : ''}}">
                {!! Form::label('idtipofk', 'Idtipofk: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                <select class="form-control m-b" id="idtipofk" name="idtipofk" requiered>
                    @foreach ($tipos as $selectipo)
                        <option value="{{$selectipo->idtipo}}" >{{$selectipo->nombre}}</option>
                    @endforeach
                </select>
                    {{--  {!! Form::number('idtipofk', null, ['class' => 'form-control']) !!}  --}}
                    {!! $errors->first('idtipofk', '<p class="help-block">:message</p>') !!}
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