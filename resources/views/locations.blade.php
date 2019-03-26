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
		<div class="col-md-4 locations">
			<h4>Annapolis (Corporate HQ)</h4>
			<p>175 North Admiral Cochrane Drive, Suite 111<br>
			Annapolis, MD 21401<br>
			<a href="https://www.google.com/maps/place/Heritage+Title,+Ltd./@38.9746525,-76.5522551,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7f6c55d97ec4b:0xff704bd52bfa6a24!8m2!3d38.9746525!4d-76.5500664" target="_blank">Get Directions</a></p>
		</div>
		<div class="col-md-4 locations">
			<h4>Baltimore</h4>
			<p>1340 Smith Avenue<br>
			Baltimore, MD 21209<br/>
			<a href="https://www.google.com/maps/place/1340+Smith+Ave,+Baltimore,+MD+21209/@39.3688452,-76.652267,17z/data=!3m1!4b1!4m5!3m4!1s0x89c81aaf2a1b3909:0xf0d9345803de91f0!8m2!3d39.3688452!4d-76.6500783" target="_blank">Get Directions</a></p>
		</div>
		<div class="col-md-4 locations">
			<h4>Bowie</h4>
			<p>3060 Mitchellville Rd, Suite 101<br>
			Bowie, MD 20716<br/>
			<a href="https://www.google.com/maps/place/3060+Mitchellville+Rd+%23101,+Bowie,+MD+20716/@38.9321736,-76.7362398,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7eb7fddefce7d:0x3d7d3ef0a09f7851!8m2!3d38.9321736!4d-76.7340511" target="_blank">Get Directions</a></p>
		</div>
	</div>
	<div class="row">	
		<div class="col-md-4 locations">
			<h4>Columbia</h4>
			<p>5501 Twin Knolls Rd., Suite 107A<br>
			Columbia, MD 21045<br/>
			<a href="https://www.google.com/maps/place/5501+Twin+Knolls+Rd+%23107A,+Columbia,+MD+21045/@39.2212896,-76.845144,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7dfee0b9cd5db:0x500e6569769218f8!8m2!3d39.2212896!4d-76.8429553" target="_blank">Get Directions</a></p>
		</div>
		<div class="col-md-4 locations">
			<h4>Waldorf</h4>
			<p>10665 Stanhaven Place, Suite 300A<br>
			White Plains, MD 20695<br/>
			<a href="https://www.google.com/maps/place/10665+Stanhaven+Pl+%23300A,+White+Plains,+MD+20695/@38.5930277,-76.9431787,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7a75df4df5c55:0xab017ce46ae4197f!8m2!3d38.5930277!4d-76.94099" target="_blank">Get Directions</a></p>
		</div>
		<div class="col-md-4 locations">
			<h4>Rockville</h4>
			<p>11140 Rockville Pike, Suite 400<br>
			Rockville, MD 20852<br/>
			<a href="https://www.google.com/maps/place/11140+Rockville+Pike+%23400,+Rockville,+MD+20852/@39.0398475,-77.1124111,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7cc225026e40f:0xc5eb916ba120cd33!8m2!3d39.0398475!4d-77.1102224" target="_blank">Get Directions</a></p>
		</div>
	</div>
  </div>
</section>
@endsection