@extends('layouts.app')

@section('title', 'Fees and Price Guarantee | Heritage Title, Ltd. | Real Estate Settlement Services in Maryland, DC, and Virginia')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
	#mainNav {
		background-color: #fff;
	}
	.fixed-top {
		position: inherit;
	}
	.container-fluid.header {
	    background-size: cover;
	    background-position: center center;
	}
	.header-text {
	    width: 70%;
	    min-width: 300px;
	    padding: 10px;
	    margin: 70px auto;
	}
	.col-md-12.pricing {
	    margin-bottom: 2em;
	    text-align: center;
	}
</style>
<!-- https://codepen.io/adrianjacob/pen/KdVLXY -->
<div class="container-fluid header">
	<div class="row">
		<div class="header-text">
			<h3 style="color: red;">Email Fraud Warning!</h3>
			<p>We would like to alert all of our clients about a new internet fraud scheme that is causing a number of unsuspecting <strong><u>home buyers to lose their down payments</u></strong>. Please read this alert in full so that you will not become a victim of this fraudulent activity.</p>

			<p>The Federal Bureau of Investigation (FBI) estimates that more than $3.1 billion dollars has been stolen from victims of wire fraud schemes. The number of fraudulent wire transfer scams reported by title companies and closing agents to the FBI’s Internet Crime Complaint Center increased by 480 percent in 2016. This type of fraud was reported in all 50 states.</p>

			<p>As a precaution, follow the suggestions below to make sure you protect yourself from fraud:</p>

			<ul>
				<li>DO NOT wire money based on an email.</li>
				<li>Beware of any modification or change to wire instructions.</li>
				<li>VERIFY all instructions by phone.</li>
				<li>DO NOT use the phone number in an email.</li>
			</ul>

			<p>Heritage Title, LTD will NOT change our wiring instructions via email. If you receive an e-mail that purports to be from our office indicating that our wiring instructions have changed and/or instructing you to wire funds elsewhere, please CALL our office immediately. Heritage Title uses a single wire account for ALL transactions. The account will not change.</p>

			<p>More information about the wire fraud scheme can be read at the <a href="https://www.ncua.gov/newsroom/ncua-report/2018/wire-transfer-scams-involving-real-estate-transactions-are-increasing" target="_blank">National Credit Union Administration website</a>.</p>

		</div>
	</div>
</div>

@endsection