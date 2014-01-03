@extends('animations/template')

@section('title') Forest Moon @stop

@section('style')
  <style>
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    .astral {
      position: absolute;
      z-index: 1;
      top: 0;
    }
    .earth {
      position: absolute;
      z-index: 2;
      top: 0;
      backgournd-color: white;
    }
    .actor {
      position: absolute;
      z-index: 3;
      top: 0;
    }
    .world {
      margin: 0;
      padding: 0;
    }
  </style>
@stop

@section('scripts')
<script src="/animations/forest_moon/forest.js"></script>
<script>
  setInterval(uni.animate, 17);
</script>
@stop
