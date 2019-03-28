@extends('layouts.admin')

@section('title', 'New Blog Post | Heritage Title, Ltd.')

@section('content')

<section id="create-post">
  <div class="container">	
  	<h1>Create Blog Post</h1>
  	{!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!}
  		<div class="form-group">
  			{{Form::label('title','Title')}}
  			{{Form::text('title','',['class'=>'form-control','placeholder'=>'title','required'=>'required'])}}
  		</div>
      <div class="form-group">
        {{Form::label('slug','SEO Friendly Slug')}}
        {{Form::text('slug','',['class'=>'form-control','placeholder'=>'write-something-like-this'])}}
      </div>
      <div class="form-group">
        {{Form::label('image','Image')}}
        <p>If you have an image to upload go <a href="https://ibb.co/pfN4xz2" target="_blank">here</a> to upload. After upload is complete, right click the image and "copy image address" to paste in the field below.</p>
        {{Form::text('image','',['class'=>'form-control','placeholder'=>'image url'])}}
      </div>
  		<div class="form-group">
  			{{Form::label('body','Body')}}
  			{{ Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text','required'=>'required']) }}
  		</div>
  		{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      <a href="/dashboard/blogs" class="btn btn-danger">Cancel</a>
  	{!! Form::close() !!}
  </div>
</section>
@endsection