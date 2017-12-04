@extends('layouts.admin')

@section('content')

    <h2>New User</h2>

    {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files'=>true]) !!}

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {{ Form::label('name', 'Name', array('class'=>'control-label'))}}
            {{ Form::text('name', '', array('class'=>'form-control', 'placeholder'=>''))}}
            @if($errors->has('name'))
                <span class="help-block" style="display:block">
                   <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
             {{ Form::label('email', 'Email', array('class'=>'control-label'))}}
             {{ Form::email('email', '', array('class'=>'form-control', 'placeholder'=>''))}}
                @if($errors->has('email'))
                  <span class="help-block" style="display:block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
        </div>

    <div class="form-group {{ $errors->has('role_id') ? 'has-error' : '' }}">
         {{ Form::label('role_id', 'Role', array('class'=>'control-label'))}}
         {{ Form::select('role_id', [''=>'Choose Option']+$roles,  null, ['class'=>'form-control', 'required'])}}
            @if($errors->has('role_id'))
              <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('role_id') }}</strong>
              </span>
            @endif
    </div>

    <div class="form-group {{ $errors->has('is_active') ? 'has-error' : '' }}">
         {{ Form::label('is_active', 'Status', array('class'=>'control-label'))}}
         {{ Form::select('is_active', ['1'=>'Active', 0 =>'Not Active'],  0, ['class'=>'form-control', 'required'])}}
            @if($errors->has('is_active'))
              <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('is_active') }}</strong>
              </span>
            @endif
    </div>

    <div class="form-group {{ $errors->has('photo_id') ? 'has-error' : '' }}">
         {{ Form::label('photo_id', 'Photo', array('class'=>'control-label'))}}
         {{ Form::file('photo_id', array('class'=>'form-control'))}}
            @if($errors->has('photo_id'))
              <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('photo_id') }}</strong>
              </span>
            @endif
    </div>

    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
         {{ Form::label('password', 'Password', array('class'=>'control-label'))}}
         {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>''))}}
            @if($errors->has('password'))
              <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
    </div>

        <div class="form-group">
            {{Form::submit('Create', array('class'=>'btn btn-primary'))}}
        </div>

        {!! Form::close() !!}

@stop