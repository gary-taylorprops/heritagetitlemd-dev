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
	    background-image: url(https://images.unsplash.com/photo-1516455590571-18256e5bb9ff);
	    background-size: cover;
	    background-position: center;
	}
	.header-text {
	    background-color: rgba(250,250,250,.9);
	    width: 70%;
	    min-width: 300px;
	    padding: 10px;
	    margin: 100px auto;
	}
	.col-md-4.locations {
	    margin-bottom: 2em;
	}

	body {
	  background: #fbfbfb;
	  font-family: 'Merriweather', serif;
	  font-size: 16px;
	  color: #666;
	}

	.row {
	  padding: 50px 0;
	}

	.seperator {
	  margin-bottom: 30px;
	  width: 35px;
	  height: 3px;
	  background: #fed18c;
	  border: none;
	}

	.title {
	  text-align: center;
	}
	.title .row {
	  padding: 50px 0 0;
	}
	.title h1 {
	  text-transform: uppercase;
	}
	.title .seperator {
	  margin: 0 auto 10px;
	}

	.item {
	  position: relative;
	  margin-bottom: 30px;
	  min-height: 1px;
	  float: left;
	  -webkit-backface-visibility: hidden;
	  -webkit-tap-highlight-color: transparent;
	  -webkit-touch-callout: none;
	  -webkit-user-select: none;
	  -moz-user-select: none;
	  -ms-user-select: none;
	  user-select: none;
	}
	.item .item-in {
	  background: #fff;
	  padding: 40px;
	  position: relative;
	}
	.item .item-in:hover:before {
	  width: 100%;
	}
	.item .item-in::before {
	  content: "";
	  position: absolute;
	  bottom: 0px;
	  height: 2px;
	  width: 0%;
	  background: #fed18c;
	  right: 0px;
	  transition: width 0.4s;
	}

	.item h4 {
	  font-size: 18px;
	  letter-spacing: 2px;
	  text-transform: uppercase;
	}
	.item p {
	  font-size: 16px;
	}
	.item a {
	  font-size: 18px;
	  text-transform: uppercase;
	  color: #666666;
	  margin-top: 10px;
	}
	.item a:hover {
	  text-decoration: none;
	}

	.read-more {
		font-size: 14px !important;
	}

	@media only screen and (max-width: 768px) {
	  .item .icon {
	    position: relative;
	    top: 0;
	    left: 0;
	  }
	}

</style>

<div class="container-fluid header">
	<div class="row">
		<div class="header-text">
			<h3>Blogs</h3>
			<p>Heritage Title has a wealth of knowledge that we love to share.</p>
				
		</div>
	</div>
</div>
<!-- Start Blog Layout -->
<div class="container">
  <div class="row">
  	@foreach($blogs as $blog)
    <div class="col-md-6 item">
      <div class="item-in">
        <h4><a href="/blog/{{ $blog->id }}/{{ $blog->slug }}">{{ $blog->title }}</a></h4>
        <div class="seperator"></div>
        <p>{{ str_limit(strip_tags(html_entity_decode($blog->body)),180) }}</p>
        <a class="read-more" href="/blog/{{ $blog->id }}/{{ $blog->slug }}">Read More
          <i class="fa fa-long-arrow-right"></i>
        </a>
      </div>
    </div>
    @endforeach
  </div>
  <div class="row">
  	<div class="col-md-12">
  		{{ $blogs->links() }}
  	</div>
  </div>
</div>



<!--section id="blogs">
  <div class="container">
  	<div class="row">
    	@if(count($blogs) > 0)
    		@foreach($blogs as $blog)
	    		<div class="col-md-4 blog">
	    			<div class="blog-inner">
		    			<h4><a href="/blog/{{ $blog->id }}/{{ $blog->slug }}">{{ $blog->title }}</a></h4>
		    			<p>{{ str_limit(strip_tags(html_entity_decode($blog->body)),100) }}<br>
		    					{{ $blog->created_at->format('m-d-Y') }}
		    				<br>
		    			<a href="/blog/{{ $blog->id }}/{{ $blog->slug }}">Read more</a></p>
		    		</div>
	    		</div>
    		@endforeach
	</div>
	<div class="row">
		<div class="col-md-12" style="margin: 0 auto;">
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
</section-->
@endsection