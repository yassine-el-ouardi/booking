@extends('layouts.main-layout')


@section('body')
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op5" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>{{ $hotel->name ??''}}</h1>
            <div class="room-details-price">
              {{ $hotel->main_price ??''}} / NIGHT
            </div>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>
                <a href="index.html">Hotels</a>
              </li>
              <li>{{ $hotel->name ??''}}</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="room">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-12">
              <!-- ROOM SLIDER -->
              <div class="room-slider">
                <div id="room-main-image" class="owl-carousel image-gallery">
                  <!-- ITEM -->
                  <div class="item">
                      <a href="{{$hotel->drive_image ?? styling/images/rooms/single/single1.jpg }}">
                        <img class="img-fluid" src="{{$hotel->drive_image ?? styling/images/rooms/single/single1.jpg }}" alt="Image">
                      </a>
                  </div>
                  @foreach ($rooms as $room)
                    
                 
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{$room->drive_image ?? styling/images/rooms/single/single2.jpg }}">
                        <img class="img-fluid" src="{{$room->drive_image ?? styling/images/rooms/single/single2.jpg }}" alt="Image">
                      </a>
                  </div>
                    </figure>
                  
                  @endforeach

                </div>
                <div id="room-thumbs" class="room-thumbs owl-carousel">
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="{{$hotel->drive_image ?? "styling/images/rooms/single/single1.jpg" }}" alt="Image"></div>
                  <!-- ITEM -->
                  @foreach ($rooms as $room)
                  
                  <div class="item"><img class="img-fluid" src="{{$room->drive_image ?? "styling/images/rooms/single/single2.jpg"}}" alt="Image"></div>
                  @endforeach
                </div>
              </div>
              <p class="dropcap">{{$hotel->description}}</p>

              <div class="section-title sm">
                <h4>Hotel SERVICES</h4>
                <p class="section-subtitle">All Room Includes</p>
              </div>
              <div class="room-services-list">
                <div class="row">

                  <div class="col-sm-4">
                    <ul class="list-unstyled">

                    <li class=@if(!str_contains($hotel->services,"FreeWiFi"))'no' @endif>
                      <i class=@if(!str_contains($hotel->services,"FreeWiFi"))'fa fa-times' @else 'fa fa-check' @endif></i>Free Wi-Fi</li>
                 
                    <li class=@if(!str_contains($hotel->services,"BreakfastInclude"))'no' @endif>
                      <i class=@if(!str_contains($hotel->services,"BreakfastInclude"))'fa fa-times' @else 'fa fa-check' @endif></i>Breakfast Include</li>
                      
                    <li class=@if(!str_contains($hotel->services,"PrivateBalcony"))'no' @endif>
                      <i class=@if(!str_contains($hotel->services,"PrivateBalcony"))'fa fa-times' @else 'fa fa-check' @endif></i>Private Balcony</li>
                    
                    <li class=@if(!str_contains($hotel->services,"FreeNewspaper"))'no' @endif>
                      <i class=@if(!str_contains($hotel->services,"FreeNewspaper"))'fa fa-times' @else 'fa fa-check' @endif></i>Free Newspaper</li>

                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <ul class="list-unstyled">

                      <li class=@if(!str_contains($hotel->services,"FlatScreenTv"))'no' @endif>
                        <i class=@if(!str_contains($hotel->services,"FlatScreenTv"))'fa fa-times' @else 'fa fa-check' @endif></i>Flat Screen Tv</li>
                   
                      <li class=@if(!str_contains($hotel->services,"FullAc"))'no' @endif>
                        <i class=@if(!str_contains($hotel->services,"FullAc"))'fa fa-times' @else 'fa fa-check' @endif></i>Full Ac</li>
                        
                      <li class=@if(!str_contains($hotel->services,"BeachView"))'no' @endif>
                        <i class=@if(!str_contains($hotel->services,"BeachView"))'fa fa-times' @else 'fa fa-check' @endif></i>Beach View</li>
                      
                      <li class=@if(!str_contains($hotel->services,"RoomService"))'no' @endif>
                        <i class=@if(!str_contains($hotel->services,"RoomService"))'fa fa-times' @else 'fa fa-check' @endif></i>Room Service</li>

                      </ul>
                  </div>
                  <div class="col-sm-4">
                    <ul class="list-unstyled">
                      <li class=@if(!str_contains($hotel->services,"DoubleBad"))'no' @endif>
                        <i class=@if(!str_contains($hotel->services,"DoubleBad"))'fa fa-times' @else 'fa fa-check' @endif></i>Double Bed</li>

                      <li class=@if(!str_contains($hotel->services,"FreeInternet"))'no' @endif>
                        <i class=@if(!str_contains($hotel->services,"FreeInternet"))'fa fa-times' @else 'fa fa-check' @endif></i>Free Internet</li>
                      
                        {{-- <li>
                        <i class="fa fa-check"></i>80 Sq mt</li>
                       --}}
                      {{-- <li>
                        <i class="fa fa-check"></i>3 Persons</li> --}}
                      

                    </ul>
                  </div>
                </div>
              </div>
              
              <!-- ROOM REVIEWS -->
              <div id="room-reviews" class="room-reviews">
                <div class="section-title sm">
                  <h4>Hotel stars</h4>

 
                  <div class="review-contentt">
                    <div class="rating">
                      @for ($i = 0; $i < $hotel->stars ; $i++)
                      <i class="fa fa-star voted" aria-hidden="true"></i>		
                    @endfor
                    @for ($i = 0; $i < (5 -  $hotel->stars ); $i++)
                      <i class="fa fa-star-o" aria-hidden="true"></i>		
                    @endfor	

                    </div>
                  </div>
                  </div>
                  </div>

              <div class="similar-rooms">
                <div class="section-title sm">
                  <h4>OUR ROOMS</h4>
                </div>
                <div class="row">

                  @foreach ($rooms as $room)
                    
                  

                    <!-- ITEM -->
                    <div class="col-lg-4">
                      <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                          <a href="room?id={{ $room->id }}">
                            <img src="{{$room->drive_image ?? "styling/images/rooms/single/single1.jpg" }}" class="img-fluid" alt="Image">
                          </a>
                          <div class="room-services">
                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                          </div>
                          <div class="room-price">{{ $room->price }} / night</div>
                        </figure>
                        <div class="room-info">
                          <h2 class="room-title">
                            <a href="room?id={{ $room->id }}">Room For {{ $room->guestnumber }} Person</a>
                          </h2>
                          <p>Enjoy our room</p>
                        </div>
                      </div>
                    </div>

                  @endforeach
                </div>
              </div>
            </div>

            <!-- SIDEBAR -->
            <div class="col-lg-4 col-12">
              <div class="sidebar">
                <!-- WIDGET -->
                <aside class="widget noborder">
                  <div class="vertical-booking-form">
                    <div id="booking-notification" class="notification"></div>
                    <h3 class="form-title">Hotel Inforamations</h3>
                    <div class="inner">
                        <!-- EMAIL -->
                        <div class="">
                          <p><b> Address : </b>{{ $hotel->Address }}</p>
                        </div>
                        <div class="">
                          <p><b> City : </b>{{ $hotel->city->ville }}</p>
                        </div>           
                        <div class="">
                          <p><b> Phone Number : </b>{{ $hotel->phone }}</p>
                        </div>                                      
                        <div class="">
                          <p><b> Zip Code : </b>{{ $hotel->codepostal }}</p>
                        </div>



                    </div>
                  </div>
                </aside>
                <!-- WIDGET -->
                <aside class="widget widget-help">
                  <h4 class="widget-title">NEED HELP?</h4>
                  <div class="phone">
                    <a href="tel:+212600000000">
                      +212600000000
                    </a>
                  </div>
                  <div class="email">
                    <a href="mailto:contact@easybookig.com">contact@easybooking.com</a>
                  </div>
                </aside>
                {{-- <!-- WIDGET -->
                <aside class="widget">
                  <h4 class="widget-title">Latest Posts</h4>
                  <div class="latest-posts">
                    <!-- ITEM -->
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="blog-post.html">
                              <img src="styling/images/blog/blog-post1.jpg" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="blog-post.html">10 Tips for Holiday Travel</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ITEM -->
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="blog-post.html">
                              <img src="styling/images/blog/blog-post2.jpg" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ITEM -->
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="blog-post.html">
                              <img src="styling/images/blog/blog-post3.jpg" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="blog-post.html">Honeymoon in Hotela</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ITEM -->
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="blog-post.html">
                              <img src="styling/images/blog/blog-post4.jpg" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="blog-post.html">Travel Gift Ideas for Every Type of Traveler</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ITEM -->
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="blog-post.html">
                              <img src="styling/images/blog/blog-post5.jpg" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="blog-post.html">Breakfast with coffee and orange juic</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
                <!-- WIDGET -->
                <aside class="widget noborder">
                  <img src="styling/images/banner.jpg" class="img-fluid" alt="Image">
                </aside> --}}
              </div>
            </div>
          </div>
        </div>
      </main>
 

        @endsection