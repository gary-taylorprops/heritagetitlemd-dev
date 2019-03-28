
@extends('layouts.app')
@section('title', $blog->title.' | Heritage Title, Ltd. | Real Estate Settlement Services in Maryland, DC, and Virginia')
@section('canonical','/blog/'.$blog->id.'/'.$blog->slug)
@section('content')
<style>
	body {
		background: #fbfbfb;
	}
	#mainNav {
		background-color: #fff;
	}
	.fixed-top {
		position: inherit;
	}
	.post-background {
	  background-image: url('{{ $blog->image_url }}');
	  background-size: cover;
	  background-position: center;
	}

	.post-head {
	  padding-top: 3.5rem;
	  padding-bottom: 3rem;
	  color: white;
	  text-align: center;
	  max-width: 770px;
	  margin: 0 auto 7.5rem;
	}
	@media (min-width: 414px) {
	  .post-head {
	    margin-bottom: 9rem;
	  }
	}
	@media (min-width: 576px) {
	  .post-head {
	    margin-bottom: 10rem;
	  }
	}
	@media (min-width: 768px) {
	  .post-head {
	    margin-bottom: 12rem;
	  }
	}
	@media (min-width: 992px) {
	  .post-head {
	    margin-bottom: 15rem;
	  }
	}
	.post-head .post-date {
	  font-size: 0.875rem;
	  color: rgba(255, 255, 255, 0.75);
	  font-weight: 600;
	  line-height: 1.7;
	  display: inline-block;
	}

	.post-title {
		text-transform: uppercase;
	}

	.post-image {
	  padding: 1.5rem;
	  background-color: #fff;
	  color: #666;
	  margin-top: -7.5rem;
	  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.08), 0 16px 32px -8px rgba(0, 0, 0, 0.16);
	}

	.post-leader {
	  font-weight: 600;
	}

	p {
	  margin-bottom: calc(1.25rem * 1.6);
	  line-height: 1.6;
	  font-family: 'Merriwhether',serif;
	  font-size: 16px;
	}

	.embed-responsive {
	  margin-bottom: 3rem;
	}
	@media (min-width: 992px) {
	  .embed-responsive {
	    margin-bottom: 6rem;
	  }
	}

	.align-left {
	  text-align: left;
	}

	.align-center {
	  text-align: center;
	}

	.align-right {
	  text-align: right;
	}

	section#post {
	    padding-top: 0 !important;
	}
</style>
<section id="post">
	<!-- #if is_traditional -->
	<!-- #with detail -->
	<div class="section">
	  <div class="post-background">
	    <div class="container">
	      <div class="row">
	        <div class="col-12 align-left">
	          <div class="blog-go-back">
	            
	          </div>
	        </div>
	        <div class="col-12 post-head">
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="container">
	    <div class="row">
	      <div class="col-12">
	        <div class="post-image">
	        	<h1 class="post-title align-center">{{ $blog->title }}</h1>
	            <p class="post-date align-center">{{ $blog->created_at->format('F j, Y') }}</p>
	            {!! $blog->body !!}
	        </div>
	      </div>
	    </div>
	  </div>
	<!-- /with -->
	<!-- /if -->
	</div>


	  <!--div class="container">
	    <div class="row">	
			<div class="col-md-12 post">
				<h1>{{ $blog->title }}</h1>
				<p>By {{ $user->name }}
				<p>{{ $blog->created_at->format('m-d-Y') }}<br>
				{!! $blog->body !!}<br>
				<a href="/blog" class="btn btn-primary">Back</a></p>
				
				<a href="/blog/{{$blog->id}}/edit">Edit</a>
				{!! Form::open(['action'=>['PostsController@destroy',$blog->id,'method'=>'POST','class'=>'pull-right']]) !!}
					{{Form::hidden('_method','DELETE')}}
					{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
				{!!Form::close()!!}
			</div>
	  	</div>
	  </div-->
</section>
@endsection