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
	.col-md-12.pricing {
	    margin-bottom: 2em;
	    text-align: center;
	}
	article {
	  width:100%;
	  max-width:1000px;
	  margin:0 auto;
	  /*height:1000px; */
	  position:relative;
	}
	article ul {
	  display:flex;
	  top:0px;
	  z-index:10;
	  padding-bottom:14px;
	  padding-left: 0 !important;
	}
	article li {
	  list-style:none;
	  flex:1;
	}
	article li:last-child {
	  border-right:1px solid #DDD;
	}
	article button {
	  width:100%;
	  border: 1px solid #DDD;
	  border-right:0;
	  border-top:0;
	  padding: 10px;
	  background:#FFF;
	  font-size:14px;
	  font-weight:bold;
	  height:60px;
	  color:#999
	}
	article li.active button {
	  background:#F5F5F5;
	  color:#000;
	}
	table { border-collapse:collapse; table-layout:fixed; width:100%; }
	th { background:#F5F5F5; display:none; }
	td, th {
	  height:53px
	}
	td,th { border:1px solid #DDD; padding:10px; empty-cells:show; }
	td,th {
	  text-align:left;
	}
	td+td, th+th {
	  text-align:center;
	  display:none;
	}
	td.default {
	  display:table-cell;
	}
	.bg-yellow {
	  border-top:3px solid #eaab00;
	}
	.bg-red {
	  border-top:3px solid #981e32;
	}
	.sep {
	  background:#F5F5F5;
	  font-weight:bold;
	}
	.txt-l { font-size:28px; font-weight:bold; }
	.txt-top { position:relative; top:-9px; left:-2px; }
	.tick { font-size:18px; color:#2CA01C; }
	.hide {
	  border:0;
	  background:none;
	}
	.disclaimer {
		margin-top: 4em;
	}

	@media (min-width: 640px) {
	  article ul {
	    display:none;
	  }
	  td,th {
	    display:table-cell !important;
	  }
	  td,th {
	    width: 330px;
	  
	  }
	  td+td, th+th {
	    width: auto;
	  }
	}
</style>
<!-- https://codepen.io/adrianjacob/pen/KdVLXY -->
<div class="container-fluid header">
	<div class="row">
		<div class="header-text">
			<h3>Average Closing Costs in Maryland</h3>
			<p>Closing costs can be broken down into two categories: lender origination fees and third-party fees. <strong>The average closing costs in Maryland on a $200,000 loan, as of August 2015, amounted to $1,835, consisting of $1,153 in lender fees and $742 in third-party fees.</strong> While this figure included various service fees, the true total closing costs must include title fees, insurance, prepaid interest, taxes and escrow to be realistic. Typically, Maryland homebuyers should expect total closing costs to run between 2 to 5% of the property purchase price before adding real estate broker fees of up to 6%.</p>

			<p>Heritage Financial beats the average cost of fees by offering a <strong>$695 flat fee</strong> for all HF services. See the detailed breakdown below.</p>
		</div>
	</div>
</div>
<section id="pricing">
  <div class="container">
    <div class="row">	
		<div class="col-md-12 pricing">
			<h2>$695 flat fee to Heritage Title for all of our services *</h2>
			<h3>We will beat any competitors' pricing by $100. **</h3>
		</div>
	</div>
	<div class="row">
		<!-- DIRTY Responsive pricing table HTML -->

		<article>

		<ul>
		  <li class="bg-yellow active">
		    <button>Purchase Charges</button>
		  </li>
		  <li class="bg-red">
		    <button>Standard Refinance Charges</button>
		  </li>
		</ul>  

		<table>
		  <thead>
		    <tr>
		      <th class="hide"></th>
		      <th class="bg-yellow default">Purchase Charges</th>
		      <th class="bg-red">Standard Refinance Charges</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Total price</td>
		      <td class="default"><span class="txt-top">&dollar;</span><span class="txt-l">695</span></td>
		      <td><span class="txt-top">&dollar;</span><span class="txt-l">695</span></td>
		    </tr>
		    <tr>
		      <td colspan="3" class="sep">Title Charges</td>
		    </tr>
		    <tr>
		      <td>Settlement or Closing Fee</td>
		      <td class="default"><span class="tick">&#10004;</span></td>
		      <td><span class="tick">&#10004;</span></td>
		    </tr>
		    <tr>
		      <td>Title Examination</td>
		      <td class="default"><span class="tick">&#10004;</span></td>
		      <td><span class="tick">&#10004;</span></td>
		    </tr>
		    <tr>
		      <td>Title Insurance Binder</td>
		      <td class="default"><span class="tick">&#10004;</span></td>
		      <td><span class="tick">&#10004;</span></td>
		    </tr>
		    <tr>
		      <td>Document Preparation</td>
		      <td class="default"><span class="tick">&#10004;</span></td>
		      <td><span class="tick">&#10004;</span></td>
		    </tr>
		    <tr>
		      <td>Title Insurance</td>
		      <td class="default">State Rate</td>
		      <td>State Rate</td>
		    </tr>
		    <tr>
		      <td>Post Closing</td>
		      <td class="default"><span class="tick">&#10004;</span></td>
		      <td><span class="tick">&#10004;</span></td>
		    </tr>
		    <tr>
		      <td>Title Procurement of Documents</td>
		      <td class="default"><span class="tick">&#10004;</span></td>
		      <td><span class="tick">&#10004;</span></td>
		    </tr>
		    <tr>
		      <td colspan="3" class="sep">Settlement Charges</td>
		    </tr>
		    <tr>
		      <td>Standard Settlement Fee</td>
		      <td class="default">Paid From Purchaser’s Funds at Settlement</td>
		      <td>Paid From Purchaser’s Funds at Settlement</td>
		    </tr>
		  </tbody>
		</table>		  
		</article>
	</div>
	<div class="row disclaimer">
		<p><span class="tick">&#10004;</span> indicates item is included as part of the $695 flat fee.</p>
		<p>* $695 does not include title insurance and 3rd party fees. No other discounts or coupons may be applied to this price.<br/>** This guarantee/discount does not apply to title insurance or 3rd party fees.</p>
	</div>
  </div>
</section>

<script type="text/javascript">
	// DIRTY Responsive pricing table JS

	$( "ul" ).on( "click", "li", function() {
	  var pos = $(this).index()+2;
	  $("tr").find('td:not(:eq(0))').hide();
	  $('td:nth-child('+pos+')').css('display','table-cell');
	  $("tr").find('th:not(:eq(0))').hide();
	  $('li').removeClass('active');
	  $(this).addClass('active');
	});

	// Initialize the media query
	  var mediaQuery = window.matchMedia('(min-width: 640px)');
	  
	  // Add a listen event
	  mediaQuery.addListener(doSomething);
	  
	  // Function to do something with the media query
	  function doSomething(mediaQuery) {    
	    if (mediaQuery.matches) {
	      $('.sep').attr('colspan',3);
	    } else {
	      $('.sep').attr('colspan',2);
	    }
	  }
	  
	  // On load
	  doSomething(mediaQuery);
</script>
@endsection