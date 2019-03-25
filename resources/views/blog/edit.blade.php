@extends('layouts.admin')

@section('title', 'Edit Post | Heritage Title, Ltd.')

@section('content')

<section id="create-post">
  <div class="container">	
  	<h1>Edit Blog</h1>
  	{!! Form::open(['action' => ['PostsController@update',$blog->id],'method' => 'POST']) !!}
  		<div class="form-group">
  			{{Form::label('title','Title')}}
  			{{Form::text('title',$blog->title,['class'=>'form-control','placeholder'=>'title'])}}
  		</div>
  		<div class="form-group">
  			{{Form::label('body','Body')}}
  			{{ Form::textarea('body',$blog->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text']) }}
  		</div>
      {{Form::hidden('_method','PUT')}}
  		{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      <a href="/dashboard/blogs" class="btn btn-danger">Cancel</a>
  	{!! Form::close() !!}
  </div>
</section>
@endsection