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
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>

    <p>Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. </p>
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
      <form role="form">
        <div class="form-group">
          <textarea name="userMessage" id="userMessage" class="form-control" rows="10" placeholder="Comments and questions." required></textarea>
        </div>
        <div class="form-group pull-left">
          <input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="name@domain.com" required>
        </div>
        <button type="submit" class="btn btn-default pull-right">Send</button>
      </form>
    </div>
  </div>
</div>

@stop

@section('scripts')
  <script>
    logo('logoContent');
  </script>
@stop
