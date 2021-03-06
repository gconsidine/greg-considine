<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Greg Considine's development portfolio" />
    <meta name="author" content="Greg Considine" />
    
    <title>Greg Considine | @yield('title')</title>

    @if(App::environment() === 'development')
      <link href="/gc/css/bootstrap.css" rel="stylesheet" />
      <link href="/gc/css/gc.css" rel="stylesheet" />
    @else
      <link href="/gc/css/gc.min.css?modified={{filemtime('gc/css/gc.min.css')}}" rel="stylesheet" />
    @endif

    <link href="/gc/img/prod/favicon.png" rel="shortcut icon" />

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '{{ getenv("GA") }}', 'greg-considine.com');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');
    </script>
  </head>
  
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><div class="gc-logo-header" id="logoHeader" height="300px"></div></a>
        </div>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav gc-nav-buttons">
            <li><a class="gc-scroll" href="#webApps">Web Apps</a></li>
            <li><a class="gc-scroll" href="#canvasAnimations">Animations</a></li>
            <li><a class="gc-scroll" href="#openSource">Open Source</a></li>
            <li><a class="gc-scroll" href="#contactMe">Contact</a></li>
          </ul>
        </div>

      </div>
    </nav>

    @yield('content')

    <div class="container gc-footer">

      <div class="col-md-4 gc-built-with">
        <h3>Built With</h3>
        <div class="gc-content-divider"></div>
        <a title="Laravel">
          <div class="pull-left gc-icon-sprite gc-sprite-laravel"></div>
        </a>
        <a title="HTML5">
          <div class="pull-left gc-icon-sprite gc-sprite-html"></div>
        </a>
        <a title="Twitter Bootstrap">
          <div class="pull-left gc-icon-sprite gc-sprite-bootstrap"></div>
        </a>
        <a title="Grunt">
          <div class="pull-left gc-icon-sprite gc-sprite-grunt"></div>
        </a>
        <div style="clear:both"></div>
      </div>

      <div class="col-md-3 gc-connect">
        <h3>Connect</h3>
        <div class="gc-content-divider"></div>
        <a href="http://www.linkedin.com/pub/greg-considine/60/384/710" title="LinkedIn" target="_blank">
          <div class="pull-left gc-icon-sprite gc-sprite-linkedin"></div>
        </a>
        <a href="https://github.com/gconsidine" title="GitHub" target="_blank">
          <div class="pull-left gc-icon-sprite gc-sprite-github"></div>
        </a>
        <div style="clear:both"></div>
      </div>

      <div class="col-md-5 gc-info">
        <h3>Info</h3>
        <div class="gc-content-divider"></div>
        <p>
          Greg Considine <br />
          <a href="/gc/files/greg-considine.pdf" target="_blank">R&eacute;sum&eacute;</a><br />
          Copyright &copy; 2013-{{ Date('Y') }} <a href="/">greg-considine.com</a>
        </p>
      </div>

    </div>

    @if(App::environment() === 'development')
      <script src="/gc/js/jquery.js"></script>
      <script src="/gc/js/bootstrap.js"></script>
      <script src="/gc/js/gc.js"></script>
    @else
      <script src="/gc/js/gc.min.js?modified={{filemtime('gc/js/gc.min.js')}}"></script>
    @endif

    @yield('scripts')
    
  </body>
</html>
