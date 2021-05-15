@extends('layouts.main-layout')

@section('home','active')
@section('body')
  
      <!-- ========== REVOLUTION SLIDER ========== -->
      <div class="slider">
        <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
          <ul>
            <!-- SLIDE NR. 1 -->
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="styling/images/slider/slider1.jpg" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              <!-- LAYER NR. 1 -->
              <h1
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="320"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['80','50','40','30']"
                data-lineheight="['60','50','40','30']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 5; color: #fff; font-weight: 900;">
                TOUCH THE DREAM</h1>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="410"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="16"
                data-lineheight="16"
                data-whitespace="nowrap"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; color: #fff;">Live Your Myth With EasyBooking</div>
              <!-- LAYER NR. 3 -->
              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="-120"
                data-y="480"
                data-voffset=""
                data-responsive_offset="on"
                data-whitespace="nowrap"
                data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11;">
                <a class="btn" href="booking-form.html">
                  <i class="fa fa-calendar"></i>BOOK A ROOM NOW</a>
              </div>
              <!-- LAYER NR. 4 -->
              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="128"
                data-y="480"
                data-voffset=""
                data-responsive_offset="on"
                data-whitespace="nowrap"
                data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11;">
                <a class="btn" href="contact.html">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>CONTACT US NOW</a>
              </div>
              <!-- LAYER NR. 5 -->
              <div
                class="tp-caption tp_m_title tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="200"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['18','18','16','16']"
                data-lineheight="['18','18','16','16']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="color: #fff">
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <!-- LAYER NR. 6 -->
              <div
                class="tp-caption tp_m_title tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="240"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['25','25','18','18']"
                data-lineheight="['25','25','18','18']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="color: #fff">
                Star Luxury Hotel
              </div>
            </li>
            <!-- SLIDE NR. 2 -->
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="styling/images/slider/slider2.jpg" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="320"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['70','50','40','25']"
                data-lineheight="['60','50','40','25']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 5; color: #fff; font-weight: 900;">WHERE DREAMS COME TRUE
              </div>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="410"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="16"
                data-lineheight="16"
                data-whitespace="nowrap"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; color: #fff;">You'll Never Forget Your Stay
              </div>
            </li>
            <!-- SLIDE NR. 3 -->
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="styling/images/slider/slider3.jpg" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="305"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['80','70','60','40']"
                data-lineheight="['80','70','60','40']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 5; color: #fff; font-weight: 900;">ENJOY YOUR HOLIDAYS
              </div>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="410"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="16"
                data-lineheight="16"
                data-whitespace="nowrap"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; color: #fff;">Family Room from €89 per night
              </div>
            </li>
          </ul>
        </div>
        <!-- ========== BOOKING FORM ========== -->
        <div class="horizontal-booking-form">
          <div class="container">
            <div class="inner box-shadow-007">
              <!-- ========== BOOKING NOTIFICATION ========== -->
              <div id="booking-notification" class="notification"></div>


              <form method="POST" action="{{ route("search") }}">
                

                
                <!-- NAME -->
                <div class="row">
                  <div class="col mx-1">
                    <div class="form-group">
                      <label>Name
                        <a href="#" title="Your Name" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please type your first name and last name">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <input class="form-control" name="name" type="text" data-trigger="hover" placeholder="Write Your Name">
                    </div>
                  </div>
                  <!-- EMAIL -->
                  {{-- <div class="col-md-2">
                    <div class="form-group">
                      <label>Email
                        <a href="#" title="Your Email" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please type your email adress">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <input class="form-control" name="email" type="email" placeholder="Write your Email">
                    </div>
                  </div> --}}
                  <script>
                    /* When the user clicks on the button,
                    toggle between hiding and showing the dropdown content */
                    function myFunction() {
                      document.getElementById("myDropdown").classList.toggle("show");
                    }
                    
                    function filterFunction() {
                      var input, filter, ul, li, a, i;
                      input = document.getElementById("myInput");
                      filter = input.value.toUpperCase();
                      div = document.getElementById("myDropdown");
                      a = div.getElementsByTagName("a");
                      for (i = 0; i < a.length; i++) {
                        txtValue = a[i].textContent || a[i].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                          a[i].style.display = "";
                        } else {
                          a[i].style.display = "none";
                        }
                      }
                    }
                    </script>





                  <!-- City -->
                    <div class="col mx-1">
                      <div class="form-group">
                        <label>City
                        <a href="#" title="City" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select city">
                          <i class="fa fa-info-circle"></i>
                        </a>
                        </label>

                        <select name="city" id="booking-city" class="form-control" title="Select City" data-header="City">
                                          

                        @foreach ($cities as $city)
                                            
                                          
                        <option value="{{$city}}">{{$city}}</option>


                        @endforeach
                        </select>
                        </div>
                    </div>
                     <script type="text/javascript">
                      $(".form-control").select2({
                            templateResult: formatState
                           });
                           function formatState (state) {
                                if (!state.id) {
                                              return state.text;
                                     }
                                      }
                            </script> 



                  <!-- DATE -->
                  <div class="col mx-1">
                    <div class="form-group">
                      <label>Check-In/Out
                        <a href="#" title="Check-In / Check-Out" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select check-in and check-out date">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <input type="text" class="datepicker form-control" name="time_from" placeholder="Arrival & Departure" readonly="readonly">
                    </div>
                  </div>
                  <!-- GUESTS -->
                  <div class="col mx-1">
                    <div class="form-group">
                      <label>Guests
                        <a href="#" title="Guests" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Select Adults / Children">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <div class="panel-dropdown">
                        <div class="form-control guestspicker">Guests
                          <span class="gueststotal"></span></div>
                        <div class="panel-dropdown-content">
                          <div class="guests-buttons">
                            <label>Adults
                              <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="18+ years" data-original-title="Adults">
                                <i class="fa fa-info-circle"></i>
                              </a>
                            </label>
                            <div class="guests-button">
                              <div class="minus"></div>
                              <input type="text" name="adultguests" class="booking-guests" value="0">
                              <div class="plus"></div>
                            </div>
                          </div>
                          <div class="guests-buttons">
                            <label>Children
                              <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Under 18 years" data-original-title="Children">
                                <i class="fa fa-info-circle"></i>
                              </a>
                            </label>
                            <div class="guests-button">
                              <div class="minus"></div>
                              <input type="text" name="childernguests" class="booking-guests" value="0">
                              <div class="plus"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- BOOKING BUTTON -->
                  <div class="col mx-1">
                    <button type="submit" class="btn btn-book">BOOK A ROOM</button>

                  </div>
                </div>
          @csrf
              </form>



            </div>
          </div>
        </div>
      </div>
      <!-- ========== ABOUT ========== -->
      <section class="about mt100">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="section-title">
                <h4 class="text-uppercase">EasyBooking. since 1996</h4>
                <p class="section-subtitle">High quality accommodation services</p>
              </div>
              <div class="info-branding">
                <p>Founded in 1996 in Agadir, EasyBooking.com has grown from a small Dutch startup to one of the world’s leading digital travel companies. Part of Booking Holdings Inc. (NASDAQ: BKNG), EasyBooking.com’s mission is to make it easier for everyone to experience the world.

                  By investing in the technology that helps take the friction out of travel, EasyBooking.com seamlessly connects millions of travellers with memorable experiences, a range of transport options and incredible places to stay - from homes to hotels and much more. As one of the world’s largest travel marketplaces for both established brands and entrepreneurs of all sizes, EasyBooking.com enables properties all over the world to reach a global audience and grow their businesses.
                  
                  EasyBooking.com is available in 43 languages and offers more than 28 million total reported accommodation listings, including over 6.2 million listings alone of homes, apartments and other unique places to stay. No matter where you want to go or what you want to do, EasyBooking.com makes it easy and backs it all up with 24/7 customer support.</p>

              </div>
            </div>
            <div class="col-lg-4">
              <div class="brand-info">
                <div class="inner">
                  <div class="content">
                    <img src="styling/images/logo-big-transparent.svg" width="100%" alt="Image">
                    <div class="stars">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <h5 class="title">LUXURY BOOKING SITE</h5>
                    <p class="mt20">Founded in 1996 in Agadir, EasyBooking.com has grown from a small Dutch startup to one of the world’s leading digital travel companies.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ========== ROOMS ========== -->
      <section class="rooms gray">
        <div class="container">
          <div class="section-title">
            <h4>OUR ROOMS</h4>
            <a href="{{ route('rooms') }}" class="view-all">View all rooms</a>
          </div>
          <div class="row">

@foreach ($rooms as $room )
  

            <!-- ITEM -->
            <div class="col-md-4">
              <div class="room-grid-item">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.html">
                    <img src={{$room->drive_image ?? "styling/images/rooms/deluxe/deluxe.jpg" }} class="img-fluid" alt="Image">
                  </a>
                  {{-- <div class="room-services">
                    <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-bath" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                    <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                  </div> --}}
                  <div class="room-price">{{ $room->price }} / night</div>
                </figure>
                <div class="room-info">
                  <h2 class="room-title">
                    <a href="room.html">Room for {{ $room->guestnumber }} Persons</a>
                  </h2>
                  <p>Enjoy your room</p>
                </div>
              </div>
            </div>


@endforeach
          </div>
        </div>

      </section>
      <!-- ========== GALLERY ========== -->
      {{-- <section class="gallery">
        <div class="container">
          <div class="section-title">
            <h4>EasyBooking. gallery</h4>
            <p class="section-subtitle">Check out our image gallery</p>
            <a href="gallery.html" class="view-all">View gallery images</a>
          </div>
          <div class="gallery-owl owl-carousel image-gallery">
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="styling/images/gallery/gallery1.jpg">
                  <img src="styling/images/gallery/gallery1.jpg" alt="Image">
                </a>
                <figcaption>Swimming Pool</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="styling/images/gallery/gallery2.jpg">
                  <img src="styling/images/gallery/gallery2.jpg" alt="Image">
                </a>
                <figcaption>Room View</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="styling/images/gallery/gallery3.jpg">
                  <img src="styling/images/gallery/gallery3.jpg" alt="Image">
                </a>
                <figcaption>Cocktail</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="styling/images/gallery/gallery4.jpg">
                  <img src="styling/images/gallery/gallery4.jpg" alt="Image">
                </a>
                <figcaption>Breakfast</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="styling/images/gallery/gallery5.jpg">
                  <img src="styling/images/gallery/gallery5.jpg" alt="Image">
                </a>
                <figcaption>Playground</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="styling/images/gallery/gallery6.jpg">
                  <img src="styling/images/gallery/gallery6.jpg" alt="Image">
                </a>
                <figcaption>Restaurant</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="styling/images/gallery/gallery7.jpg">
                  <img src="styling/images/gallery/gallery7.jpg" alt="Image">
                </a>
                <figcaption>Wedding Ceremony</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="styling/images/gallery/gallery8.jpg">
                  <img src="styling/images/gallery/gallery8.jpg" alt="Image">
                </a>
                <figcaption>Beach</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="styling/images/gallery/gallery9.jpg">
                  <img src="styling/images/gallery/gallery9.jpg" alt="Image">
                </a>
                <figcaption>Honeymoon Room</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="styling/images/gallery/gallery10.jpg">
                  <img src="styling/images/gallery/gallery10.jpg" alt="Image">
                </a>
                <figcaption>Sea</figcaption>
              </figure>
            </div>
          </div>
        </div>
      </section> --}}


      <!-- ========== CONTACT V2 ========== -->
      <section class="contact-v2 gray">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="section-title">
                <h4>GET IN TOUCH</h4>
                <p class="section-subtitle">Get in touch</p>
              </div>
              <ul class="contact-details">
                <li>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  Ecole Supérieure de Technologie d'Agadir B.P 33/S, Agadir 80000</li>
                <li>
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  Phone: +212600000000
                </li>
                <li>
                  <i class="fa fa-fax"></i>
                  Fax: +212600000000</li>
                <li>
                  <i class="fa fa-globe"></i>
                  Web: www.easybooking.com</li>
                <li>
                  <i class="fa fa-envelope"></i>
                  Email:
                  <a href="mailto:info@site.com">contact@easybooking.com</a>
                </li>
              </ul>
            </div>
            <div class="col-md-7">
              <div class="section-title">
                <h4>CONTACT US</h4>
                <p class="section-subtitle">Say hello</p>
              </div>
              <form id="contact-form" name="contact-form">
                <div class="form-group">
                  <input class="form-control" name="name" placeholder="Your Name" type="text">
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                </div>
                <button class="btn" type="submit">
                  <i class="fa fa-location-arrow"></i>Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </section>

@endsection
