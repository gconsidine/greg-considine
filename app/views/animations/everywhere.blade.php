@extends('animations/template')

@section('title') Everywhere, USA @stop

@section('style')
  <style>
    .canvas-container {
      width: 1000px;
      height: 500px;
      margin: 0 auto;
      border: 1px solid #cccccc;
      overflow: hidden;
    }
    .title {
      width: 1000px;
      margin: 0 auto;
    }
  </style>
@stop

@section('content')
    <div class="canvas-container">
      <canvas id="canvas" width="9000" height="500"></canvas>
    </div>
    <div class="title">
      <p><em>Everywhere</em>, USA</p>
    </div>
@stop

@section('scripts')
  <script src="/animations/everywhere_usa/everywhere.js"></script>
@stop

