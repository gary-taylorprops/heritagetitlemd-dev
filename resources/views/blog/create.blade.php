@extends('layouts.admin')

@section('title', 'New Blog Post | Heritage Title, Ltd.')

@section('content')

<section id="create-post">
  <div class="container">	
  	<h1>Create Blog</h1>
  	{!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!}
  		<div class="form-group">
  			{{Form::label('title','Title')}}
  			{{Form::text('title','',['class'=>'form-control','placeholder'=>'title'])}}
  		</div>
  		<div class="form-group">
  			{{Form::label('body','Body')}}
  			{{ Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text']) }}
  		</div>
  		{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      <a href="/dashboard/blogs" class="btn btn-danger">Cancel</a>
  	{!! Form::close() !!}
  </div>
</section>
@endsection