@extends('template')

@section('title') Home @stop

@section('content')

<div class="container">
  <div class="gc-content">
    <div class="col-md-4">
      <div id="logoContent" class="gc-logo-content" style="height: 300px;"></div>
    </div>
    <div class="col-md-8">
      <h1>Welcome</h1>
      <div class="gc-content-divider"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>

    <p>Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="gc-content">
    <div class="col-md-4 gc-icon-title">
      <span class="glyphicon glyphicon-globe"></span>
      <h1>Web Apps</h1>
    </div>
    <div class="col-md-8">

      <div class="gc-image-container">
        <p>California Sports Lawyer</p>
        <img class="img-responsive" src="http://placehold.it/700x75" />
      </div>

      <div class="gc-image-container">
        <p>California Sod Center</p>
        <img class="img-responsive" src="http://placehold.it/700x75" />
      </div>

      <div class="gc-image-container">
        <p>Redalytics</p>
        <img class="img-responsive" src="http://placehold.it/700x75" />
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="gc-content">
    <div class="col-md-4 gc-icon-title">
      <span class="glyphicon glyphicon-picture"></span>
      <h1>Canvas Animations</h1>
    </div>
    <div class="col-md-8">
      <div class="gc-image-container">
        <p>Everywhere, USA</p>
        <img class="img-responsive" src="http://placehold.it/700x75" />
      </div>

      <div class="gc-image-container">
        <p>Forest Moon</p>
        <img class="img-responsive" src="http://placehold.it/700x75" />
      </div>

      <div class="gc-image-container">
        <p>Squares and Triangles</p>
        <img class="img-responsive" src="http://placehold.it/700x75" />
      </div>

    </div>
  </div>
</div>

<div class="container">
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
    new logo('logoContent');
  </script>
@stop
