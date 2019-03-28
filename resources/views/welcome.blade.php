@extends('layouts.app')

@section('title', 'Heritage Title, Ltd. | Real Estate Settlement Services in Maryland, DC, and Virginia')

@section('content')
<style type="text/css">
  @media (min-width:992px){
    nav img{
      content:url({{ asset('img/logos/HeritageTitle-white.png') }});
    }
  }
  .navbar-shrink img{
    content:url({{ asset('img/logos/HeritageTitle.png') }}) !important;
  }
</style>
<!-- Header -->
<header class="masthead">
  <div class="layer">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-uppercase">Welcome to <mark>Heritage&nbsp;Title</mark></div>
        <div class="intro-lead-in">D.C., Maryland and Virginia's Premier Title Company</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Our Services</a>
      </div>
    </div>
  </div>
</header>

<!-- About -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">About Us</h2>
        <h3 class="section-subheading text-muted" style="margin-bottom: 20px; font-style: normal; text-align: left;">Heritage Title is the area’s premier and locally owned title company serving Maryland, Virginia, and Washington, D.C. Heritage Title facilitates and streamlines real estate transactions by providing comprehensive title insurance protection and professional settlement services.</h3>
        <h3 class="section-subheading text-muted" style="margin-bottom: 20px; font-style: normal; text-align: left;">Heritage Title is your LOCAL, PROFESSIONAL title choice. Whether you are a buyer, seller, realtor, lender in a purchase transaction, or a borrower or lender in a refinance transaction, you should expect and receive from Heritage Financial a settlement experience that is smooth, efficient, professional, friendly, and satisfying.</h3>
        <h3 class="section-subheading text-muted" style="margin-bottom: 20px; font-style: normal; text-align: left;">We prides ourselves on the professionalism and experience of our staff. Each of our offices is managed by a title professional with significant industry experience, who treats your business personally and with the highest degree of care. Heritage Title will conduct your real estate settlement at a time and location that is convenient to all parties involved. Our offices work together to offer you a wide range of options for settlement, and the highest level of professionalism and knowledge. We want you as a lifetime client and will work hard to earn your trust and your business.</h3>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Services</h2>
        <h3 class="section-subheading text-muted" style="margin-bottom: 35px;">Heritage Title conducts residential and commercial real estate closings in Maryland, the District of Columbia and Virginia. We offer a <strong>$695 flat fee</strong> for all Heritage Title Services and will beat any competitors' pricing by $100*. <a href="/low-fee-title-company">See a breakdown of our fees and what we have to offer.</a></h3>
        <h3 class="section-subheading text-muted">We offer these services anytime from our many locations in Maryland, DC, and Virginia &mdash; including your home or office. We come to YOU! See all our locations <a href="/locations">here</a>.</h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-3">
        <span class="fa-stack fa-4x">
          <a href="/low-fee-title-company"><i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-file-contract fa-stack-1x fa-inverse"></i></a>
        </span>
        <h4 class="service-heading">Title Insurance</h4>
        <p class="text-muted">We serve home buyers and sellers, investors, residential and commercial real estate agents and brokers, national, regional and local banks and credit unions, builders and developers, attorneys and others involved in any type of residential or commercial real estate transactions.</p>
      </div>
      <div class="col-md-3">
        <span class="fa-stack fa-4x">
          <a href="/low-fee-title-company"><i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-hand-holding-usd fa-stack-1x fa-inverse"></i></a>
        </span>
        <h4 class="service-heading">Closing/Escrow</h4>
        <p class="text-muted">Our dedicated escrow and settlement services professionals are experienced with the intricacies of your local market and the ins and outs of every type of residential and commercial resale, new construction, refinance, international, relocation and timeshare transactions.</p>
      </div>
      <div class="col-md-3">
        <span class="fa-stack fa-4x">
          <a href="/low-fee-title-company"><i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-file-invoice-dollar fa-stack-1x fa-inverse"></i></a>
        </span>
        <h4 class="service-heading">Underwriting</h4>
        <p class="text-muted">Our partners &mdash; <a href="https://www.oldrepublictitle.com/" target="_blank">Old Republic</a> and <a href="https://www.firstam.com/" target="_blank">First American</a> &mdash; provide a depth of knowledge and expertise that enables us to consistently provide solutions designed to meet your specific title insurance needs. </p>
      </div>
      <div class="col-md-3">
        <span class="fa-stack fa-4x">
          <a href="/low-fee-title-company"><i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-money-check-alt fa-stack-1x fa-inverse"></i></a>
        </span>
        <h4 class="service-heading">Lender Services</h4>
        <p class="text-muted">Enjoy the convenience of a single point of contact and a personalized local experience for your borrowers. Our name is your assurance of a quality customer experience. We offer nationwide digital mortgage origination solutions as part of our premier lender closing and escrow services.</p>
      </div>
    </div>
  </div>
</section>

<!-- Team -->
<!--section class="bg-light" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
        <h3 class="section-subheading text-muted">The Heritage Title staff is fully committed to providing the best service possible. We are interested in building a long term business relationship with you and are here to meet your individual needs.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="team-member">
          <img class="mx-auto" src="{{ asset('img/team/pawn.png') }}" alt="Donna Downing">
          <h4>Donna Downing</h4>
          <p class="text-muted">Manager</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="tel:8669134095">
                <i class="fas fa-phone"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="team-member">
          <img class="mx-auto" src="{{ asset('img/team/princess-george.jpg') }}" alt="Princess George">
          <h4>Princess George</h4>
          <p class="text-muted">Post Closer</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="tel:8669134095">
                <i class="fas fa-phone"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="team-member">
          <img class="mx-auto" src="{{ asset('img/team/krystyn-padgett.jpg') }}" alt="Krystyn Padgett">
          <h4>Krystyn Padgett</h4>
          <p class="text-muted">Processor</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="tel:8669134095">
                <i class="fas fa-phone"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="team-member">
          <img class="mx-auto" src="{{ asset('img/team/pawn.png') }}" alt="Jacqueline "Jackie" Eucare">
          <h4>Jacqueline "Jackie" Eucare</h4>
          <p class="text-muted">Pre-Processor</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="tel:8669134095">
                <i class="fas fa-phone"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted">Interested in joining our team? Head over to our <a href="/careers">careers</a> page and learn more about career opportunities at Heritage Title.</p>
      </div>
    </div>
  </div>
</section-->

@endsection