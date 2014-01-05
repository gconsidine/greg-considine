<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Greg Considine's development portfolio" />
    <meta name="author" content="Greg Considine" />
    
    <title>Greg Considine | @yield('title')</title>

    <link href="/gc/css/gc.min.css?v={{filemtime('gc/css/gc.min.css')}}" rel="stylesheet" />
    <link href="/gc/img/favicon.png" rel="shortcut icon" />

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46817449-1', 'greg-considine.com');
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
        <a title="Laravel"><img width=75 height=52 class="img-responsive pull-left" src="gc/img/laravel.png" /></a>
        <a title="HTML5"><img width=75 height=75 class="img-responsive pull-left" src="gc/img/html5.png" /></a>
        <a title="Twitter Bootstrap"><img width=75 height=75 class="img-responsive pull-left" src="gc/img/bootstrap.png" /></a>
        <div style="clear:both"></div>
      </div>
      <div class="col-md-3 gc-connect">
        <h3>Connect</h3>
        <div class="gc-content-divider"></div>
        <a href="http://www.linkedin.com/pub/greg-considine/60/384/710" title="LinkedIn" target="_blank"><img width=75 height=75 class="img-responsive pull-left" src="gc/img/linkedin.png" /></a>
        <a href="https://github.com/gconsidine" title="GitHub" target="_blank"><img width=75 height=75 class="img-responsive pull-left" src="gc/img/github.png" /></a>
        <div style="clear:both"></div>
      </div>
      <div class="col-md-5 gc-info">
        <h3>Info</h3>
        <div class="gc-content-divider"></div>
        <p>
          Greg Considine <br />
          Copyright &copy; 2014 <a href="/">greg-considine.com</a>
        </p>
      </div>
    </div>

    <script src="/gc/js/gc.min.js?v={{filemtime('gc/js/gc.min.js')}}"></script>
    <script> gc.logo('logoHeader'); </script>

    @yield('scripts')

  </body>
</html>
