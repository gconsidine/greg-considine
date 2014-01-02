@extends('template')

@section('title') Home @stop

@section('content')

<div class="container">
  <div class="gc-content">
    <div class="col-md-4">
      <div id="logoContent" class="gc-logo-content" style="height: 300px;"></div>
    </div>
    <div class="col-md-8">
      <h1>Thanks for Visiting</h1>
      <div class="gc-content-divider"></div>

      <p>Here you'll find a mixed bag of projects I've worked on in my free time.  My primary focus in the last couple of years has been web development while I finish an undergraduate degree in Interdisciplinary Computing and the Arts and Computer Science at the University of California, San Diego. Originally, I started doing web development out of curiosity (having only worked with C, C++, and Java in an academic setting) -- beginning first with static HTML/CSS-only sites, then moving to data-driven PHP + MySQL web applications (full of spaghetti code).  Having to maintain the aforementioned "spaghetti" turned me on to best practices, MVC, and the Laravel Framework.  Somewhere along the way I picked up JavaScript and transitioned away from writing procedural JavaScript to writing object-oriented JavaScript, making use of the Revealing Module pattern.</p>

      <p>Web development is my primary hobby, and I'm always looking to learn new technologies and hone my skills. If you'd like to get in touch with me, use the <a class="gc-scroll" href="#contactMe">contact form</a> below and I'll get back to you as soon as possible.  Thank you!</p>

    </div>
  </div>
</div>

<div id="webApps" class="container">
  <div class="gc-content">
    <div class="col-md-4 gc-icon-title">
      <span class="glyphicon glyphicon-globe"></span>
      <h1>Web Apps</h1>
    </div>
    <div class="col-md-8">

      <div class="gc-image-container">
        <p><a href="http://csllegal.com">California Sports Lawyer</a></p>
        <a href="http://csllegal.com"><img class="img-responsive gc-border" src="gc/img/csl.png" /></a>
      </div>

      <div class="gc-image-container">
        <p><a href="http://californiasodcenter.com">California Sod Center</a></p>
        <a href="http://californiasodcenter.com"><img class="img-responsive gc-border" src="gc/img/csc.png" /></a>
      </div>

      <div class="gc-image-container">
        <p><a href="/web-apps/redalytics">Redalytics</a></p>
        <a href="/web-apps/redalytics"><img class="img-responsive gc-border" src="gc/img/redalytics.png" /></a>
      </div>

    </div>
  </div>
</div>

<div id="canvasAnimations" class="container">
  <div class="gc-content">
    <div class="col-md-4 gc-icon-title">
      <span class="glyphicon glyphicon-picture"></span>
      <h1>Canvas Animations</h1>
    </div>
    <div class="col-md-8">
      <div class="gc-image-container">
        <p><a href="/animations/everywhere-usa">Everywhere, USA</a></p>
        <a href="/animations/everywhere-usa"><img class="img-responsive gc-border" src="gc/img/everywhere.png" /></a>
      </div>

      <div class="gc-image-container">
        <p><a href="/animations/forest-moon">Forest Moon</a></p>
        <a href="/animations/forest-moon"><img class="img-responsive gc-border" src="gc/img/forest_moon.png" /></a>
      </div>

      <div class="gc-image-container">
        <p><a href="/animations/squares-and-triangles">Squares and Triangles</p></a>
        <a href="/animations/squares-and-triangles"><img class="img-responsive gc-border" src="gc/img/s_and_t.png" /></a>
      </div>

    </div>
  </div>
</div>

<div id="contactMe" class="container">
  <div class="gc-content">
    <div class="col-md-4 gc-icon-title">
      <span class="glyphicon glyphicon-envelope"></span>
      <h1>Contact Me</h1>
    </div>
    <div class="col-md-8">
      <div class="form-group">
        <textarea name="userMessage" id="userMessage" class="form-control" rows="10" placeholder="Comments and questions." required></textarea>
      </div>
      <div class="form-group pull-left">
        <input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="name@domain.com" required>
      </div>
      {{ Form::token() }}
      <button onclick="gc.request({ 
                         text : document.getElementById('userMessage').value,
                         email : document.getElementById('userEmail').value,
                         token : document.getElementsByName('_token')[0].value
                       });" class="btn btn-default pull-right">Send</button>
    </div>
  </div>
</div>

@stop

@section('scripts')
  <script> logo('logoContent'); </script>
@stop
