@extends('layouts.app')

@section('title', 'Careers | Heritage Title, Ltd. | Real Estate Settlement Services in Maryland, DC, and Virginia')

@section('content')
<style>
	#mainNav {
		background-color: #fff;
	}
	.fixed-top {
		position: inherit;
	}
	.container-fluid.header {
	    background-image: url({{ asset('img/careers.jpg') }});
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
	.col-md-4.careers {
	    margin-bottom: 2em;
	}
</style>
<div class="container-fluid header">
	<div class="row">
		<div class="header-text">
			<h3>Heritage Title Careers</h3>
			<p>Behind every great company, is great people. That is why, as an employee of Heritage Title, you can count on a title and escrow career that will tap into your strengths, offer the training you need and give you all the tools to advance your career. We believe most people want more than a job in real estate; they want a rewarding career. Title and escrow offers that.</p>
			<p>Our goal is to be the mid-Atlantic's premier real estate services company. At Heritage, we promote a culture of caring. We’ve grown extremely quickly over the past 10 years and we are always looking to fill out our team with exceptional talent. We strive to uplift others while raising the bar on what we’re capable of achieving ourselves. In helping our clients and our community through what we do every day, that makes Heritage Title an admired company and a great place to work.</p>
			<p>If you do not see a listing for a position below but think you'd make a great fit for our team and business, give us a call or send us an <a href="#">email</a>.</p>
		</div>
	</div>
</div>
<section id="careers">
  <div class="container">
    <div class="row">	
		<div class="col-md-12 careers">
			<h3>Current Openings</h3>
			<p>Sorry, there are currently no openings at this time.</p>
		</div>
	</div>
	<!--div class="row">	
		<div class="col-md-12 careers">
			<h4>Title Officer</h4>
			<h4>Escrow Officer</h4>
			<h4>Title Processor</h4>
		</div>
	</div-->
  </div>
</section>
@endsection