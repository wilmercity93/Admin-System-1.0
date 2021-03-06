@extends('backLayout.app')
@section('title')
Edit Notificacione
@stop

@section('content')

    <h1>Edit Notificacione</h1>
    <hr/>

    {!! Form::model($notificacione, [
        'method' => 'PATCH',
        'url' => ['notificaciones', $notificacione->idnotificacion],
        'class' => 'form-horizontal'
    ]) !!}

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
            <div class="form-group {{ $errors->has('idusersfk') ? 'has-error' : ''}}">
                {!! Form::label('idusersfk', 'Idusersfk: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                <select class="form-control m-b" id="idusersfk" name="idusersfk" requiered>
                            @foreach ($users as $selecusers)
                                <option value="{{$selecusers->id}}" 
                                  @if($notificacione->idusersfk == $selecusers->id) selected @endif  >
                                   {{$selecusers->first_name}} {{$selecusers->last_name}}
                                 </option>
                            @endforeach
                    </select>
                    {{--  {!! Form::number('idpersonafk', null, ['class' => 'form-control']) !!}  --}}
                    {!! $errors->first('idusersfk', '<p class="help-block">:message</p>') !!}
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