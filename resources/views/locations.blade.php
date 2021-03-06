@extends('layouts.app')

@section('title', 'Locations | Heritage Title, Ltd. | Real Estate Settlement Services in Maryland, DC, and Virginia')

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
	    margin: 100px auto;
	}
	.col-md-4.locations {
	    margin-bottom: 2em;
	}
</style>
<div class="container-fluid header">
	<div class="row">
		<div class="header-text">
			<h3>Heritage Title Locations</h3>
			<p>Heritage Title has convenient locations to serve you throughout the Baltimore-Washington metropolitan areas. Our offices work together to offer you a wide range of options for settlement, and the highest level of professionalism and knowledge. Heritage Title will conduct your real estate settlement at a time and location that is convenient to all parties involved.</p>
			<p><strong>We will also come to YOU!</strong> We will travel to your home, office or anywhere of your choosing to give you the best possible experience.</p>
		</div>
	</div>
</div>
<section id="locations">
  <div class="container">
    <div class="row">
    	@foreach ($locations as $location)
		<div class="col-md-4 locations">
			<h4>{{$location->name}}</h4>
			<p>{{$location->address1}}<br>
				@if ($location->address2 != '')
					{{$location->address2}}<br>
				@else
				@endif
				{{$location->city}}, {{$location->state}} {{$location->zip}}<br>
			<a href="{{$location->map_url}}" target="_blank">Get Directions</a></p>
		</div>
		@endforeach
	</div>
  </div>
</section>
@endsection