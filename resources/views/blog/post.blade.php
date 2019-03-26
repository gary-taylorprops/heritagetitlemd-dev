
@extends('layouts.app')
@section('title', $blog->title.' | Heritage Title, Ltd. | Real Estate Settlement Services in Maryland, DC, and Virginia')
@section('canonical','/blog/'.$blog->id.'/'.$blog->slug)
@section('content')
<style>
	#mainNav {
		background-color: #fff;
	}
	.fixed-top {
		position: inherit;
	}
	.container-fluid.header {
	    background-image: url({{ asset('img/conference-room.jpg') }});
	    background-size: cover;
	    background-position: top center;
	}
	.header-text {
	    background-color: rgba(250,250,250,.9);
	    width: 70%;
	    min-width: 300px;
	    padding: 10px;
	    margin: 70px auto;
	}
	.col-md-4.post {
	    margin-bottom: 2em;
	}
</style>
<section id="post">
  <div class="container">
    <div class="row">	
		<div class="col-md-12 post">
			<h1>{{ $blog->title }}</h1>
			<p>By {{ $user->name }}
			<p>{{ $blog->created_at }}<br>
			{!! $blog->body !!}<br>
			<a href="/blog" class="btn btn-primary">Back</a></p>
			
			<!--a href="/blog/{{$blog->id}}/edit">Edit</a>
			{!! Form::open(['action'=>['PostsController@destroy',$blog->id,'method'=>'POST','class'=>'pull-right']]) !!}
				{{Form::hidden('_method','DELETE')}}
				{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
			{!!Form::close()!!} -->
		</div>
  </div>
</section>
@endsection