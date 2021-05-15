@extends('layouts.main-layout')

@section('location','active')


@section('body')

      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>OUR LOCATION</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>Our Location</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="location-page">
        <div class="container">
          <div class="google-map">
            <div class="toggle-streetview" id="openStreetView">
              <i class="fa fa-street-view" aria-hidden="true"></i>
            </div>
            <div id="map-canvas"></div>
          </div>
        </div>
      </main>
    
@endsection