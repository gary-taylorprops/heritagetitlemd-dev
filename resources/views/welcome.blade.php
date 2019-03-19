@extends('layouts.app')

@section('title', 'Heritage Title, Ltd. | Real Estate Settlement Services in Maryland, DC, and Virginia')

@section('content')
<!-- Header -->
<header class="masthead">
  <div class="layer">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-uppercase">Welcome to Heritage&nbsp;Title</div>
        <div class="intro-lead-in">D.C., Maryland and Virginia's Premier Title Company</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Our Services</a>
      </div>
    </div>
  </div>
</header>

<!-- Services -->
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Services</h2>
        <h3 class="section-subheading text-muted" style="margin-bottom: 35px;">Heritage Title conducts residential and commercial real estate closings in Maryland, the District of Columbia and Virginia. We are committed to the highest-level of service, to make closing as easy as possible. Heritage Title offers a wide range of locations and services to meet your real estate and financial needs.</h3>
        <h3 class="section-subheading text-muted">We offer these services anytime from our many locations in Maryland, DC, and Virginia &mdash; including your home or office. We come to YOU! See all our locations <a href="/locations">here</a>.</h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-3">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-file-contract fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Settlement Services</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-3">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-hand-holding-usd fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Escrows</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-3">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-file-invoice-dollar fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Commercial Services</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-3">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-money-check-alt fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Investor Services</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
    </div>
  </div>
</section>

<!-- About -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">About Heritage Title</h2>
        <h3 class="section-subheading text-muted">Heritage Title is the area’s premier and locally owned title company serving Maryland, Virginia, and Washington, D.C. Heritage Title facilitates and streamlines real estate transactions by providing comprehensive title insurance protection and professional settlement services.</h3>
      </div>
    </div>
    <!--div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2009-2011</h4>
                <h4 class="subheading">Our Humble Beginnings</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>March 2011</h4>
                <h4 class="subheading">An Agency is Born</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>December 2012</h4>
                <h4 class="subheading">Transition to Full Service</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>July 2014</h4>
                <h4 class="subheading">Phase Two Expansion</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>Be Part
                <br>Of Our
                <br>Story!</h4>
            </div>
          </li>
        </ul>
      </div>
    </div-->
  </div>
</section>

<!-- Team -->
<section class="bg-light" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <div class="team-member">
          <img class="mx-auto" src="{{ asset('img/team/princess-george.jpg') }}" alt="Princess George">
          <h4>Princess George</h4>
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
      <div class="col-sm-3">
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
      <div class="col-sm-3">
        <div class="team-member">
          <img class="mx-auto" src="{{ asset('img/team/pawn.png') }}" alt="Donna Downing">
          <h4>Donna Downing</h4>
          <p class="text-muted">Lead Processor</p>
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
      <div class="col-sm-3">
        <div class="team-member">
          <img class="mx-auto" src="{{ asset('img/team/pawn.png') }}" alt="Jacqueline "Jackie" Eucare">
          <h4>Jacqueline "Jackie" Eucare</h4>
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
    </div>
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Contact Us</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


@endsection