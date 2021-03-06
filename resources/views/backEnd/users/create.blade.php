@extends('backLayout.app')
@section('title')
Create user
@stop

@section('content')
<div aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">INICIO</a></li>
    <li class="breadcrumb-item"><a href="#">users</a></li>
    <li class="breadcrumb-item active" aria-current="page">create</li>
  </ol>
</div>
        <div class="panel panel-default">
        <div class="panel-heading">Create user</div>

        <div class="panel-body">

        @if (count($errors) > 0)
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="alert alert-danger">
                            <strong>Upsss !</strong> There is an error...<br /><br />
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            

{{ Form::open(array('url' => route('user.store'), 'class' => 'form-horizontal','files' => true)) }}
    <ul>
        <div class="form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
             {!! Form::hidden('avatar', 'default.jpg', ['class' => 'col-md-4 control-label']) !!}
        </div>
        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
             {!! Form::label('first_name', 'First Name', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
       <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
             {!! Form::label('last_name', 'Last name' , ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
             {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
                 {!! Form::label('telefono', 'Telefono', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_nacimiento') ? 'has-error' : ''}}">
                 {!! Form::label('fecha_nacimiento', 'Nacimiento', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_nacimiento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
                 {!! Form::label('direccion', 'Direccion', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
             {!! Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::password('password', ['class' => 'form-control']) !!}
                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
             {!! Form::label('password_confirmation', 'Password Confirmation', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div id="role" class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
             {!! Form::label('role','User role', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::select('role', $roles, null, ['class' => 'form-control']) !!}
                {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
       
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-3">
                {!! Form::submit('Submit', ['class' => 'btn btn-success form-control']) !!}
            </div>
            <a href="{{route('user.index')}}" class="btn btn-default">Return to all users</a>
        </div>
       

    </ul>
  
{{ Form::close() }}

  </div>
    </div>


@stop

@section('scripts')

@endsection