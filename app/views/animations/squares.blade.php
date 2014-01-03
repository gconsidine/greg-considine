@extends('animations/template')

@section('style')
  <style>
    .canvas-container {
      width: 750px;
      height: 500px;
      margin: 0 auto;
      overflow: hidden;
      border: 1px solid #666;
    }
    .title {
      width: 750px;
      margin: 0 auto;
    }
    .title p {
      font-size: 90%;
    }
  </style>
@stop

@section('content')
  <div class="canvas-container">
    <canvas id="canvas" width="750" height="500"></canvas>
  </div>
  <div class="title">
    <p><em>Squares and Triangles</em></p>
  </div>
@stop

@section('scripts')
  <script src="/animations/squares_and_triangles/square.js"></script>
@stop
