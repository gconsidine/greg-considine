@extends('template')

@section('title') Home @stop

@section('content')

<div class="container">
  <div class="gc-content">
    <div class="col-md-4">
      <div id="logoContent" class="gc-logo-content" style="height: 300px;"></div>
    </div>
    <div class="col-md-8 gc-welcome-container">
      <h1>Thanks for Visiting</h1>

      <div class="gc-content-divider"></div>

      <p>Here you'll find a mixed bag of projects I've worked on in my free time.  My primary focus in the last couple of 
         years has been web development while I finish an undergraduate degree in Interdisciplinary Computing and the Arts 
         and Computer Science at the University of California, San Diego. Originally, I started doing web development out of 
         curiosity (having only worked with C, C++, and Java in an academic setting), beginning first with static 
         HTML/CSS-only sites, then moving to data-driven PHP + MySQL web applications (full of spaghetti code).  
         Having to maintain the aforementioned "spaghetti" turned me on to best practices, MVC, and the Laravel Framework.  
         Somewhere along the way I picked up JavaScript and transitioned away from writing procedural JavaScript to 
         writing object-oriented JavaScript, making use of the Revealing Module pattern.</p>

      <p>Web development is my primary hobby, and I'm always looking to learn new technologies and hone my skills. 
         If you'd like to get in touch with me, use the <a class="gc-scroll" href="#contactMe">contact form</a> 
         below and I'll get back to you as soon as possible.  Thank you!</p>

    </div>
  </div>
</div>

<div id="webApps" class="container">
  <div class="gc-content">
    <div class="col-md-4 gc-icon-title">
      <span class="glyphicon glyphicon-globe gc-content-icon"></span>
      <h1>Web Apps</h1>
      <span class="glyphicon glyphicon-info-sign gc-content-details" data-toggle="modal" data-target="#webAppsModal"></span>
    </div>
    <div class="col-md-8">

      <div class="gc-image-container">
        <p><a href="http://csllegal.com" target="_blank">California Sports Lawyer</a></p>
        <a href="http://csllegal.com" target="_blank"><img width="750" height="75" 
           class="img-responsive gc-border" src="gc/img/csl.png" /></a>
      </div>

      <div class="gc-image-container">
        <p><a href="http://californiasodcenter.com" target="_blank">California Sod Center</a></p>
        <a href="http://californiasodcenter.com" target="_blank"><img width="750" height="75" 
           class="img-responsive gc-border" src="gc/img/csc.png" /></a>
      </div>

      <div class="gc-image-container">
        <p><a href="http://redalytics.greg-considine.com" target="_blank">Redalytics</a></p>
        <a href="http://redalytics.greg-considine.com" target="_blank"><img width="750" height="75" 
           class="img-responsive gc-border" src="gc/img/redalytics.png" /></a>
      </div>

    </div>
  </div>
</div>

<div id="canvasAnimations" class="container">
  <div class="gc-content">
    <div class="col-md-4 gc-icon-title">
      <span class="glyphicon glyphicon-picture gc-content-icon"></span>
      <h1>Canvas Animations</h1>
      <span class="glyphicon glyphicon-info-sign gc-content-details" data-toggle="modal" data-target="#canvasModal"></span>
    </div>
    <div class="col-md-8">

      <div class="gc-image-container">
        <p><a href="/animations/everywhere-usa">Everywhere, USA</a></p>
        <a href="/animations/everywhere-usa"><img width="750" height="75" 
           class="img-responsive gc-border" src="gc/img/everywhere.png" /></a>
      </div>

      <div class="gc-image-container">
        <p><a href="/animations/forest-moon">Forest Moon</a></p>
        <a href="/animations/forest-moon"><img width="750" height="75" 
           class="img-responsive gc-border" src="gc/img/forest_moon.png" /></a>
      </div>

      <div class="gc-image-container">
        <p><a href="/animations/squares-and-triangles">Squares and Triangles</p></a>
        <a href="/animations/squares-and-triangles"><img width="750" height="75" 
           class="img-responsive gc-border" src="gc/img/s_and_t.png" /></a>
      </div>

    </div>
  </div>
</div>

<div id="contactMe" class="container">
  <div class="gc-content">

    <div class="col-md-4 gc-icon-title">
      <span class="glyphicon glyphicon-envelope gc-content-icon"></span>
      <h1>Contact Me</h1>
    </div>

    <div class="col-md-8">

      <div class="form-group">
        <textarea name="userMessage" id="userMessage" class="form-control" rows="10" 
                  placeholder="Comments and questions." required></textarea>
      </div>

      <div class="form-group pull-left">
        <input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="name@domain.com" required>
      </div>

      {{ Form::token() }}

      <button onclick="gc.request({ 
                         text : document.getElementById('userMessage').value,
                         email : document.getElementById('userEmail').value,
                         token : document.getElementsByName('_token')[0].value
                       });" id="contactButton" class="btn btn-default pull-right">Send</button>

      <div id="contactSuccess" class="pull-right gc-text-success" style="display:none">Thank You!</div>
      <img width=32 height=32 id="contactSending" class="pull-right" style="display:none" src="/gc/img/loading.gif" />
      <div id="contactStatus" class="pull-left gc-contact-status text-danger" style="display:none"></div>
    </div>
  </div>
</div>

<!-- Modals -->
<div class="modal fade" id="webAppsModal" tabindex="-1" role="dialog" 
     aria-labelledby="webAppsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="webAppsModalLabel">Web Applications</h4>
      </div>
      <div class="modal-body">
        <div class="gc-project-entry">
          <a href="http://csllegal.com"><h4>California Sports Lawyer</h4></a>
          <p>Built with Laravel (an MVC framework for PHP) and Twitter Bootstrap (for responsive design). The site has CMS 
             features that gives an administrator the ability to add/edit/delete articles, blogs, events, clients, and 
             other information throughout the site. All content is automatically formatted and displayed.</p>
        </div>
        <div class="gc-project-entry">
          <a href="http://californiasodcenter.com"><h4>California Sod Center</h4></a>
          <p>This iteration of californiasodcenter.com was completely redesigned from the ground up. It's an e-commerce 
             site that allows customers to easily purchase sod and sod-related items quickly and securely using 
             Authorize.net as a payment gateway.</p>
        </div>
        <div class="gc-project-entry">
          <a href="http://redalytics.greg-considine.com"><h4>Redalytics</h4></a>
          <p>A fun project that I worked on over the course of a few weekends. It was my first attempt at creating a 
             single-page application, where all content is asynchronously loaded up front, then processed and displayed 
             with JavaScript. Page navigation is just simple DOM manipulation -- there's no waiting for a response 
             from the server after the initial wait to gather a user's post history, so the overall experience 
             feels snappy like a native app.</p>

          <p>I think I got a little ahead of myself in the description. Redalytics is a tool that allows a user to gather 
             all post history from a given reddit account and have it formatted and displayed in a way that's easy to 
             navigate. There are also charts that show posting habits and frequencies, as well as a section for general 
             information containing total karma count, trophies, top 3 best posts, top 3 worst posts, etc.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="canvasModal" tabindex="-1" role="dialog" aria-labelledby="canvasModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="canvasModalLabel">Canvas Animations</h4>
      </div>
      <div class="modal-body">
        <div class="gc-project-entry">
          <a href="/animations/everywhere-usa"><h4>Everywhere, USA</h4></a>
          <p>This animation was made over the course of a day or two as a class project.  It was one of my first attempts 
             at working with HTML5 canvas, and my first attempt at a side-scrolling animation.  Projects were due on a 
             weekly basis in this particular class, so I was never able to squeeze as much detail as I wanted into anything 
             I created.  This animation features a little truck putt-putting along, and was inspired by a road trip I took 
             up the 5 Freeway a few years ago.</p>
        </div>
        <div class="gc-project-entry">
          <a href="/animations/forest-moon"><h4>Forest Moon</h4></a>
          <p>I took a different approach to <em>Forest Moon</em> from my other animations, but I was still bound by the same
             time constraints in the course so I wasn't able to add in the detail I originally planned. I layered three 
             canvas elements: one layer for the orbiting sun and moon (the moon also transitions through its phases every 
             28 periods), one layer for the randomly placed (within particular parameters) terrestrial elements, and one 
             layer for actors -- though the only actor ended up being a triangular UFO-thing.</p>
        </div>
        <div class="gc-project-entry">
          <a href="/animations/squares-and-triangles"><h4>Squares and Triangles</h4></a>
          <p><em>Squares and Triangles</em> was quickly made, and although I wasn't really satisfied with the general idea 
             for this animation, I do like the artifacts that appear as the shapes are drawn, and as they're incompletely 
             erased when the animation winds back around.</p>

          <p><small><b>NOTE:</b> The JavaScript source for these animations are left unminified so they can be easily 
             viewed.</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('scripts')
  <script> gc.logo('logoContent'); </script>
@stop
