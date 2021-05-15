<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>


    <!-- ========== SEO ========== -->
    <title>EasyBooking</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="styling/images/favicon-apple.png"/>
    <link rel="icon" href="styling/images/007.ico">
    <!-- ========== ICONS and RATING ========== -->


    		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="styling/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="styling/plugins/fontawesome/css/all.min.css">
		<!-- Fancybox CSS -->
		<link rel="stylesheet" href="styling/plugins/fancybox/jquery.fancybox.min.css">
		<!-- Daterangepikcer CSS -->
		<link rel="stylesheet" href="styling/plugins/daterangepicker/daterangepicker.css">
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="styling/plugins/select2/css/select2.min.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="styling/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
		
		<link rel="stylesheet" href="styling/plugins/dropzone/dropzone.min.css">
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="styling/plugins/fullcalendar/fullcalendar.min.css">


    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="styling/css/bootstrap.min.css">
    <link rel="stylesheet" href="styling/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="styling/css/jquery.mmenu.css">
    <link rel="stylesheet" href="styling/revolution/css/layers.css">
    <link rel="stylesheet" href="styling/revolution/css/settings.css">
    <link rel="stylesheet" href="styling/revolution/css/navigation.css">
    <link rel="stylesheet" href="styling/css/animate.min.css">
    <link rel="stylesheet" href="styling/css/owl.carousel.min.css">
    <link rel="stylesheet" href="styling/css/daterangepicker.css">
    <link rel="stylesheet" href="styling/css/magnific-popup.css">
    <link rel="stylesheet" href="styling/css/style.css">
    <link rel="stylesheet" href="styling/css/responsive.css">
    <!-- ========== ICON FONTS ========== -->
    <link href="styling/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="styling/fonts/flaticon.css" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700" rel="stylesheet">


    @livewireStyles

  </head>
  <body>
    <!-- ========== PRELOADER ========== -->
    <div class="loader loader3">
      <div class="loader-inner">
        <div class="spin">
          <span></span>
          <img src="styling/images/favicon-apple.png" alt="EasyBooking">
        </div>
      </div>
    </div>
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
      <!-- ========== TOP MENU ========== -->
      <div class="topbar">
        <div class="container">
          <div class="welcome-mssg">
            Welcome to EasyBooking.
          </div>
          <div class="top-right-menu">
            <ul class="top-menu">
              <li class="d-none d-md-inline">
                <a href="tel:+212600000000">
                  <i class="fa fa-phone"></i>+212600000000
                </a>
              </li>
              <li class="d-none d-md-inline">
                <a href="mailto:contact@easybooking.com">
                  <i class="fa fa-envelope-o "></i>contact@easybooking.com</a>
              </li>
              <li>
                <a href="admin">
                  <i class="fa fa-user-circle "></i>login</a>
              </li>
              {{-- <li>
                <a href="admin">
                  <i class="fas fa-shopping-cart"></i></a>
              </li> --}}

<li>
                                          <!-- Single Wedge End -->
                                          <a href="#offcanvas-cart"
                                          class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                          <i class="fas fa-shopping-cart"></i>
                                          {{-- <span class="header-action-num">01</span> --}}
                                          <!-- <span class="cart-amount">€30.00</span> -->
                                      </a>
</li>

            </ul>
          </div>
        </div>
      </div>
      <!-- ========== HEADER ========== -->
      <header class="horizontal-header sticky-header" data-menutoggle="991">
        <div class="container">
          <!-- BRAND -->
          <div class="brand">
            <div class="logo">
              <a href="{{ route('home') }}">
                <img src="styling/images/logo.svg" alt="easyBooking">
              </a>
            </div>
          </div>
          <!-- MOBILE MENU BUTTON -->
          <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
          <!-- MAIN MENU -->
          <nav id="main-menu" class="main-menu">
            <ul class="menu">
              <li class="menu-item dropdown @yield('home')">
                <a href="/">HOME</a>
              </li>


              <li class="menu-item dropdown @yield('hotels')">
                <a href={{ route('hotels') }}>HOTELS</a>
              </li>


              <li class="menu-item dropdown @yield('rooms')">
                <a href={{ route('rooms') }}>ROOMS</a>
              </li>







              <li class="menu-item dropdown @yield('location')">
                <a href={{ route('location') }}>LOCATION</a>
              </li>
              <li class="menu-item dropdown @yield('about')">
                <a href={{ route('about') }}>ABOUT US</a>
              </li>


              <li class="menu-item @yield('contact')">
                <a href={{ route('contact') }}>CONTACT US</a>
              </li>
              <li class="menu-item menu-btn">
                <a href={{ route('search') }} class="btn">
                  <i class="fa fa-calendar"></i>
                  BOOK ONLINE</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>

      @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>

      @elseif (Session::get('fail'))
      <div class="alert alert-fail">
          {{ Session::get('fail') }}
      </div>

      @endif

<div>
      @yield('body')
</div>

<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
  <div class="inner">
      <div class="head">
          <span class="title">Cart</span>
          <button class="offcanvas-close">×</button>
      </div>

@livewire('cart1')


<div class="foot">

  @livewire('remove-from-cart')

  {{-- <div class="buttons mt-30px">
    <form action="{{ App\Http\Controllers\CartController::clearCart() }}">
      <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">clear cart</a>
    </form> --}}

    <form action={{ route("make.payment") }}>
      <button  class="btn btn-dark btn-hover-primary mb-30px">Pay</button>
    </form>
  </div>
</div>

</div>
</div>



    <!-- OffCanvas Cart Start -->
    {{-- <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
      <div class="inner">
          <div class="head">
              <span class="title">Cart</span>
              <button class="offcanvas-close">×</button>
          </div>

          @section('body')
          @foreach (App\Http\Controllers\CartController::index() as $room)

          <div class="room-grid-item">
            <figure class="gradient-overlay-hover link-icon">
              <a href="room.html">
                <img src={{$room->associatedModel->drive_image ?? "images/rooms/deluxe/deluxe.jpg" }} class="img-fluid" alt="Image">
              </a>
              <form action="{{ route("remove") }}" method="post">
                @csrf
              <input type="hidden" name="id" value={{ $room->id }}>
              <button type=submit>
                <div class="room-edit">
                <i>x</i>
                </div>
              </button>
              </form>
              <div class="room-price">{{ $room->associatedModel->price }} / night</div>
            </figure>
            <div class="room-info">
              <h2 class="room-title">
                <a href="room?id={{ $room->associatedModel->id }}">{{ $room->name }}</a>
              </h2>
              <p>in {{ $room->associatedModel->hotel->name }}</p>
            </div>
          </div>


          @endforeach

          <div class="foot">
              <div class="buttons mt-30px">
                <form action="{{ App\Http\Controllers\CartController::clearCart() }}">
                  <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">clear cart</a>
                </form>
                  <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
              </div>
          </div>

      </div>
  </div> --}}
  <!-- OffCanvas Cart End -->








      <!-- ========== INSTAGRAM ========== -->
      <section class="instgram">
        <div class="section-title aligncenter">
          <p class="section-subtitle">Check out some pictures from our instagram page
            <a href="https://www.instagram.com/EasyBooking/" target="_blank">@easyBooking</a>
          </p>
        </div>
        <div id="instafeed-gallery" class="owl-carousel instagram-owl"></div>
      </section>

      <!-- ========== FOOTER ========== -->
      <footer>
        <div class="footer-widgets">
          <div class="container">
            <div class="row">
              <!-- WIDGET -->
              <div class="col-md-5">
                <div class="footer-widget">
                  <img src="styling/images/logo.svg" class="footer-logo" alt="easybooking">
                  <div class="inner">
                    <p>Founded in 1996 in Agadir, EasyBooking.com has grown from a small Dutch startup to one of the world’s leading digital travel companies.</p>
                    <a href="https://www.tripadvisor.com/" target="_blank">
                      <div class="tripadvisor-banner">
                        <span class="review">Recommended</span>
                        <img src="styling/images/icons/tripadvisor.png" alt="Image">
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- WIDGET -->
              {{-- <div class="col-md-3">
                <div class="footer-widget">
                  <h3>LATEST NEWS</h3>
                  <div class="inner">
                    <ul class="latest-posts">
                      <li>
                        <a href="blog-post.html">10 Tips for holiday travel</a>
                      </li>
                      <li>
                        <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                      </li>
                      <li>
                        <a href="blog-post.html">Honeymoon at -------------</a>
                      </li>
                      <li>
                        <a href="blog-post.html">Travel gift ideas for every type of traveler</a>
                      </li>
                      <li>
                        <a href="blog-post.html">Breakfast with coffee and orange juice</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div> --}}
              <!-- WIDGET -->
              <div class="col-md-3">
                <div class="footer-widget">
                  <h3>USEFUL LINKS</h3>
                  <div class="inner">
                    <ul class="useful-links">
                      <li>
                        <a href="about-us.html">About Us</a>
                      </li>
                      <li>
                        <a href="contact.html">Contact Us</a>
                      </li>
                      <li>
                        <a href="shop.html">Rooms</a>
                      </li>
                      <li>
                        <a href="gallery.html">Hotels</a>
                      </li>
                      <li>
                        <a href="location.html">Our Location</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- WIDGET -->
              <div class="col-md-4">
                <div class="footer-widget">
                  <h3>Contact Info</h3>
                  <div class="inner">
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- SUBFOOTER -->
        <div class="subfooter">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="copyrights">&copy; 2021 EasyBooking.</div>
              </div>
              <div class="col-md-6">
                <div class="social-media">
                  <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#">
                    <i class="fa fa-google-plus"></i>
                  </a>
                  <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#">
                    <i class="fa fa-pinterest"></i>
                  </a>
                  <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                  <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                    <i class="fa fa-youtube"></i>
                  </a>
                  <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#">
                    <i class="fa fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- ========== JAVASCRIPT ========== -->
    <script src="styling/js/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDpQX1GivuLsfboZdnuZJf5Hm1wtNlwPLw&callback=initMap"></script>
    <script src="styling/js/bootstrap.min.js"></script>
    <script src="styling/js/bootstrap-select.min.js"></script>
    <script src="styling/js/jquery.mmenu.js"></script>
    <script src="styling/js/jquery.inview.min.js"></script>
    <script src="styling/js/jquery.countdown.min.js"></script>
    <script src="styling/js/jquery.magnific-popup.min.js"></script>
    <script src="styling/js/owl.carousel.min.js"></script>
    <script src="styling/js/owl.carousel.thumbs.min.js"></script>
    <script src="styling/js/isotope.pkgd.min.js"></script>
    <script src="styling/js/imagesloaded.pkgd.min.js"></script>
    <script src="styling/js/masonry.pkgd.min.js"></script>
    <script src="styling/js/wow.min.js"></script>
    <script src="styling/js/countup.min.js"></script>
    <script src="styling/js/moment.min.js"></script>
    <script src="styling/js/daterangepicker.js"></script>
    <script src="styling/js/parallax.min.js"></script>
    <script src="styling/js/smoothscroll.min.js"></script>
    <script src="styling/js/instafeed.min.js"></script>
    <script src="styling/js/main.js"></script>
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script src="styling/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="styling/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="styling/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="styling/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="styling/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="styling/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="styling/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="styling/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="styling/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="styling/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="styling/revolution/js/extensions/revolution.extension.video.min.js"></script>




    


    <script src="styling/cart/assets/js/main.js"></script>


    @livewireScripts
    </body>
</html>