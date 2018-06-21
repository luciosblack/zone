@extends('welcome')

@section('titulo')

Mapa

@endsection

@section('content')

<div id="map"></div>

@endsection

@push('scripts')

<script src="https://maps.google.com/maps/api/js?key=AIzaSyDcdW2PsrS1fbsXKmZ6P9Ii8zub5FDu3WQ"></script>

<script>
  $(document).ready(function() {
    demo.initGoogleMaps();
  });
</script>

@endpush