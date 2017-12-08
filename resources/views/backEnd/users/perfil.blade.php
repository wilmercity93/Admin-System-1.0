@extends('backLayout.app')
@section('title')
Show user  {{$user->first_name}}
@stop

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">The user :  {{$user->first_name}}</div>

        <div class="panel-body">
        <div class="row">
             {{--  {!! Form::label('first_name','First name', ['class' => 'col-md-4 control-label']) !!}  --}}
            <div class="col-sm-6">
            <img src="images/{{$user->avatar}}" style = "width:150px; height:150px;">
                {{$user->first_name}}
                <form enctype="multipart/form-data" action = "perfil" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
            </div>
        </div>
  
 <ul>
        <div class="row">
             {!! Form::label('first_name','First name', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {{$user->first_name}}
            </div>
        </div>
       
       <div class="row">
             {!! Form::label('last_name', 'Last name', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
               {{$user->last_name}}
            </div>
        </div>

        <div class="row">
             {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
               {{$user->email}}
            </div>
        </div>

         <div class="row">
             {!! Form::label('role', 'Role', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {{$user->roles->first()->name}}
            </div>
        </div>
    
        <div class="row">
        <br>
        <div class="col-md-6 col-md-offset-4">
            <a href="{{route('user.index')}}" class="btn btn-default">Return to  all users</a>
            </div>
        </div>
    </ul>
    </div>
    </div>                

@stop