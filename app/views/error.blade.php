<!doctype html>
<html>
  <head>
    <style>
      #logoError {
        width: 300px;    
        height: 300px;
        margin: 100px auto 0 auto;
      }
      .gc-error-container {
        width: 300px;
        height: 300px;
        margin: 20px auto;
        text-align: center;
      }
    </style>
  </head>

  <body>

    <div id="logoError"></div>
    <div class="gc-error-container">
      We've encoutered an error.  <a href="/">Return home?</a>
    </div>

    <script src="/gc/js/gc.min.js?v={{filemtime('gc/js/gc.min.js')}}"></script>
    <script> gc.logo('logoError'); </script>
  </body>
</html>
