@extends('backLayout.app')
@section('title')
Create new Caja
@stop

@section('content')

    <h1>Create New Caja</h1>
    <hr/>

    {!! Form::open(['url' => 'cajas', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('idcaja') ? 'has-error' : ''}}">
                {!! Form::label('idcaja', 'Idcaja: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('idcaja', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('idcaja', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div id="sede" class="form-group {{ $errors->has('sede') ? 'has-error' : ''}}">
                {!! Form::label('sede', 'Sede: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                     <select class="form-control m-b" id="idsedefk" name="idsedefk" requiered>
                            @foreach ($sedes as $selecsedes)
                                <option value="{{$selecsedes->idsede}}" >{{$selecsedes->descripcion}}</option>
                            @endforeach
                    </select>
                    <!-- {!! Form::select('sede', $sedes, null, ['class' => 'form-control']) !!} -->
                    {!! $errors->first('sede', '<p class="help-block">:message</p>') !!}
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