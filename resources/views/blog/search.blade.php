@extends('layouts.app')

@section('title', 'Search Blogs | Heritage Title, Ltd. | Real Estate Settlement Services in Maryland, DC, and Virginia')

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
	.header-text p {
	  font-size: 16px;
	  font-family: 'Merriweather', serif;
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
			<h3>Heritage Title Blog</h3>
			<p>Read up on industry trends and general news on real estate title and financing. Get educated on real estate title, escrow, taxes and more.</p>
			<p>Looking for something specific? Use our search below.</p>
			<form action="/blog-search" method="POST" role="search">
			    {{ csrf_field() }}
			    <div class="input-group">
			        <input type="text" class="form-control" name="q" placeholder="Search Blogs"> 
		            <span class="input-group-btn">
			            <button type="submit" class="btn btn-default" style="background: #fed18c;color: #666;">
			                <i class="fa fa-search"></i>
			            </button>
			        </span>
			    </div>
			</form>
				
		</div>
	</div>
</div>
<!-- Start Blog Layout -->
<div class="container">
  <div class="row" style="display:block;">
  		<p><a href="/blog">Back to all blogs</a></p>
  	   <p>The search results for your query: <strong>{{ $query }}</strong></p>
  	   <table class="table table-striped">
  	       <thead>
  	           <tr>
  	               <th>Title</th>
  	               <th>Description</th>
  	               <th>View Post</th>
  	           </tr>
  	       </thead>
  	       <tbody>
  	           @foreach($posts as $post)
  	           <tr>
  	               <td>{{$post->title}}</td>
  	               <td>{{ str_limit(strip_tags(html_entity_decode($post->body)),180) }}</td>
  	               <td><a class="btn btn-primary" href="/blog/{{$post->id}}/{{$post->slug}}">View</a>
  	           </tr>
  	           @endforeach
  	       </tbody>
  	   </table>
  </div>
  <div class="row">
  	<div class="col-md-12">
  		{{ $posts->links() }}
  	</div>
  </div>
</div>

@endsection