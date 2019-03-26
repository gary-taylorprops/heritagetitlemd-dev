@extends('layouts.admin')

@section('title', 'Edit Profile | Heritage Title, Ltd.')

@section('content')

<section id="profile">
  <div class="container">	
  	<h1>Edit User Profile</h1>
  	{!! Form::open(['action' => ['DashboardController@update',$user->id],'method' => 'POST']) !!}
  		<div class="form-group">
  			{{Form::label('name','Name')}}
  			{{Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'name'])}}
  		</div>
  		<div class="form-group">
  			{{Form::label('email','email')}}
  			{{ Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'email']) }}
  		</div>

  		{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      	<a href="/dashboard" class="btn btn-danger">Cancel</a>
  	{!! Form::close() !!}
  </div>
</section>
@endsection