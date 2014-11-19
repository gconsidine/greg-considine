@extends('template')

@section('title') Home @stop

@section('content')

<div class="container">
  <div class="gc-content gc-top-content">
    <div class="col-md-4">
      <div id="logoContent" class="gc-logo-content" style="height: 300px;"></div>
    </div>

    <div class="col-md-8 gc-welcome-container">
      <h1>Thanks for Visiting</h1>

      <div class="gc-content-divider"></div>
      <p>
        I'm currently interested (obsessed, really) with full-stack development.  At work, I
        primarily use a technology stack (or some portion of it) that I sometimes refer to 
        (while planting my tongue firmly in my cheek) as the NAPALM stack: 
        Node.js-AngularJS-PHP-Apache-Linux-MySQL.  Outside of the office, I'm becoming more 
        invested in the MongoDB, Express, AngularJS, and Node.js world.
      </p>

      <p>
        When I'm not immersed in something technical, I find myself becoming more interested in the 
        wisdom handed down from the elders of the industry, and the history of the industry itself.
      </p>

      <p>
        Software is my profession and primary hobby and I'm always looking to learn new 
        technologies and to hone my skills.  If you'd like to get in touch with me, use the 
        <a class="gc-scroll" href="#contactMe">contact form</a> below and I'll get back to you as 
        soon as possible.  Thank you!
      </p>

    </div>
  </div>
</div>

<div id="webApps" class="container">
  <div class="gc-content">
    <div class="col-md-4 gc-icon-title">
      <span class="glyphicon glyphicon-globe gc-content-icon"></span>
      <h1>Web Apps</h1>
      <div class="gc-link" data-toggle="modal" data-target="#webAppsModal">
        <span class="glyphicon glyphicon-info-sign gc-content-details"></span>
        <p >(click for info)</p>
      </div>
    </div>
    <div class="col-md-8">

      <div class="gc-image-container">
        <p><a href="http://csllegal.com" target="_blank">California Sports Lawyer</a></p>
        <a href="http://csllegal.com" target="_blank">
          <div class="img-responsive gc-project-sprite gc-sprite-csl gc-border"></div>
        </a>
      </div>

      <div class="gc-image-container">
        <p><a href="http://californiasodcenter.com" target="_blank">California Sod Center</a></p>
        <a href="http://californiasodcenter.com" target="_blank">
          <div class="img-responsive gc-project-sprite gc-sprite-csc gc-border"></div>
        </a>
      </div>

      <div class="gc-image-container">
        <p><a href="http://redalytics.greg-considine.com" target="_blank">Redalytics</a></p>
        <a href="http://redalytics.greg-considine.com" target="_blank">
          <div class="img-responsive gc-project-sprite gc-sprite-redalytics gc-border"></div>
        </a>
      </div>

    </div>
  </div>
</div>

<div id="canvasAnimations" class="container">
  <div class="gc-content">
    <div class="col-md-4 gc-icon-title">
      <span class="glyphicon glyphicon-picture gc-content-icon"></span>
      <h1>Canvas Animations</h1>
      <div class="gc-link" data-toggle="modal" data-target="#canvasModal">
        <span class="glyphicon glyphicon-info-sign gc-content-details"></span>
        <p >(click for info)</p>
      </div>
    </div>
    <div class="col-md-8">

      <div class="gc-image-container">
        <p><a href="/animations/everywhere-usa">Everywhere, USA</a></p>
        <a href="/animations/everywhere-usa">
          <div class="img-responsive gc-project-sprite gc-sprite-everywhere gc-border"></div>
        </a>
      </div>

      <div class="gc-image-container">
        <p><a href="/animations/forest-moon">Forest Moon</a></p>
        <a href="/animations/forest-moon">
          <div class="img-responsive gc-project-sprite gc-sprite-forest gc-border"></div>
        </a>
      </div>

      <div class="gc-image-container">
        <p><a href="/animations/squares-and-triangles">Squares and Triangles</p></a>
        <a href="/animations/squares-and-triangles">
          <div class="img-responsive gc-project-sprite gc-sprite-squares gc-border"></div>
        </a>
      </div>

    </div>
  </div>
</div>

<div id="openSource" class="container">
  <div class="gc-content">
    <div class="col-md-4 gc-icon-title">
      <span class="glyphicon glyphicon-heart-empty gc-content-icon"></span>
      <h1>Open Source</h1>
      <div class="gc-link" data-toggle="modal" data-target="#openSourceModal">
        <span class="glyphicon glyphicon-info-sign gc-content-details"></span>
        <p >(click for info)</p>
      </div>
    </div>
    <div class="col-md-8">

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
        <input type="email" name="userEmail" id="userEmail" class="form-control" 
               placeholder="name@domain.com" required>
      </div>

      {{ Form::token() }}

      <button onclick="gc.request({ 
                         text : document.getElementById('userMessage').value,
                         email : document.getElementById('userEmail').value,
                         token : document.getElementsByName('_token')[0].value
                       });" id="contactButton" class="btn btn-default pull-right">Send</button>

      <div id="contactSuccess" class="pull-right gc-text-success" style="display:none">Thank You!</div>
      <img width=32 height=32 id="contactSending" class="pull-right" style="display:none" src="/gc/img/prod/loading.gif" />
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
          <p>
            Built with Laravel (an MVC framework for PHP) and Twitter Bootstrap (for responsive 
            design). The site has CMS features that gives an administrator the ability to 
            add/edit/delete articles, blogs, events, clients, and other information throughout the 
            site. All content is automatically formatted and displayed.
          </p>
        </div>

        <div class="gc-project-entry">
          <a href="http://californiasodcenter.com"><h4>California Sod Center</h4></a>
          <p>
            This iteration of californiasodcenter.com was completely redesigned from the ground 
            up. It's an e-commerce site that allows customers to easily purchase sod and 
            sod-related items quickly and securely using Authorize.net as a payment gateway.
          </p>
        </div>

        <div class="gc-project-entry">
          <a href="http://redalytics.greg-considine.com"><h4>Redalytics</h4></a>
          <p>
            A fun project that I worked on over the course of a few weekends. It was my first 
            attempt at creating a single-page application, where all content is asynchronously 
            loaded up front, then processed and displayed with JavaScript. Page navigation is just 
            simple DOM manipulation -- there's no waiting for a response from the server after the 
            initial wait to gather a user's post history, so the overall experience feels snappy 
            like a native app.
          </p>

          <p>
            Redalytics is a tool that allows a user to gather all post history from a given reddit 
            account and have it formatted and displayed in a way that's easy to navigate. There are 
            also charts that show posting habits and frequencies, as well as a section for general 
            information containing total karma count, trophies, top 3 best posts, top 3 worst 
            posts, etc.
          </p>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="canvasModal" tabindex="-1" role="dialog" 
     aria-labelledby="canvasModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="canvasModalLabel">Canvas Animations</h4>
      </div>
      <div class="modal-body">

        <div class="gc-project-entry">
          <a href="/animations/everywhere-usa"><h4>Everywhere, USA</h4></a>
          <p>
            This animation was made over the course of a day or two as a class project.  It was one
            of my first attempts at working with HTML5 canvas, and my first attempt at a 
            side-scrolling animation.  Projects were due on a weekly basis in this particular 
            class, so I was never able to squeeze as much detail as I wanted into anything I 
            created.  This animation features a little truck putt-putting along, and was inspired 
            by a road trip I took up the 5 Freeway a few years ago.
          </p>
        </div>

        <div class="gc-project-entry">
          <a href="/animations/forest-moon"><h4>Forest Moon</h4></a>
          <p>
            I took a different approach to <em>Forest Moon</em> from my other animations, but I 
            was still bound by the same time constraints in the course so I wasn't able to add in 
            the detail I originally planned. I layered three canvas elements: one layer for the 
            orbiting sun and moon (the moon also transitions through its phases every 28 periods), 
            one layer for the randomly placed (within particular parameters) terrestrial elements, 
            and one layer for actors -- though the only actor ended up being a triangular 
            UFO-thing.
          </p>
        </div>

        <div class="gc-project-entry">
          <a href="/animations/squares-and-triangles"><h4>Squares and Triangles</h4></a>
          <p>
            <em>Squares and Triangles</em> was quickly made, and although I wasn't really 
            satisfied with the general idea for this animation, I do like the artifacts that 
            appear as the shapes are drawn, and as they're incompletely erased when the animation 
            winds back around.
          </p> 

          <p>
            <small><b>NOTE:</b> The JavaScript source for these animations are left unminified so 
            they can be easily viewed.</small>
          </p>
        </div>

      </div>
    </div>
  </div>
</div>

@stop
