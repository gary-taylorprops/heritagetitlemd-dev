@extends('layouts.app')

@section('title', 'Blogs | Heritage Title, Ltd. | Real Estate Settlement Services in Maryland, DC, and Virginia')

@section('content')

<style>
	#mainNav {
		background-color: #fff;
	}
	.fixed-top {
		position: inherit;
	}
	.container-fluid.header {
	    /*background-image: url({{ asset('img/conference-room.jpg') }}); */
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
	.col-md-4.locations {
	    margin-bottom: 2em;
	}
</style>

<!--div class="container-fluid header">
	<div class="row">
		<div class="header-text">
			<h3>Blogs</h3>
			<p>Heritage Title has a wealth of knowledge that we love to share.  </p>
			
		</div>
	</div>
</div-->
<section id="blogs">
  <div class="container">
  	<div class="row">
    	@if(count($blogs) > 0)
    		@foreach($blogs as $blog)
	    		<div class="col-md-4 blog">
	    			<h4>{{ $blog->title }}</h4>
	    			<p>{!! $blog->body !!}<br>
	    				{{ $blog->created_at }}<br>
	    			<a href="/blog/{{ $blog->id }}">Read more</a></p>
	    		</div>
    		@endforeach
    	{{ $blogs->links() }}
	</div>
</div>
    	@else
    		<div class="row">
	    		<div class="col-md-12">
    				<p>No Posts Found</p>
    			</div>
    		</div>
    	@endif
  </div>
</section>
@endsection