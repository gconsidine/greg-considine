<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Greg Considine's development portfolio" />
    <meta name="author" content="Greg Considine" />
    
    <title>Greg Considine | @yield('title')</title>
     
    <link href="/gc/img/favicon.png" rel="shortcut icon" />
     
    <style>
      #logoLinkBack {
        position:absolute;
        z-index: 5;
        width: 5%;
        height: 5%;
        top: 5px;
        left: 5px;
      }
    </style>
    
    @yield('style')

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46796950-1', 'greg-considine.com');
      ga('send', 'pageview');
    </script>
  </head>
  
  <body>
    <a href="/" title="Return Home" ><div id="logoLinkBack"></div></a>

    @yield('content')

    <script src="/gc/js/logo.js"></script>

    <script>
      logo('logoLinkBack');
    </script>

    @yield('scripts')

  </body>
</html>
