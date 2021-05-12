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
              <li class="menu-item dropdown active">
                <a href="">HOME</a>
              </li>
              <li class="menu-item dropdown">
                <a href="#">ROOMS</a>
                <ul class="submenu">
                  <li class="menu-item dropdown">
                    <a href="#">Rooms</a>
                    <ul class="submenu">
                      <li class="menu-item">
                        <a href="rooms-list.html">List View</a>
                      </li>
                      <li class="menu-item">
                        <a href="rooms-grid.html">Grid View</a>
                      </li>
                      <li class="menu-item">
                        <a href="rooms-block.html">Block View</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#">Room Details</a>
                    <ul class="submenu">
                      <li class="menu-item dropdown">
                        <a href="#">Style 1</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="room.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="room-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="room-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Style 2</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="room-style2.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="room-style2-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="room-style2-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="menu-item dropdown">
                <a href="#">BLOG</a>
                <ul class="submenu">
                  <li class="menu-item dropdown">
                    <a href="#">Blog Archive</a>
                    <ul class="submenu">
                      <li class="menu-item dropdown">
                        <a href="#">List View</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="blog.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Classic View</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="blog-classic.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-classic-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-classic-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Grid View</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="blog-grid.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-grid-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-grid-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#">Blog Post</a>
                    <ul class="submenu">
                      <li class="menu-item dropdown">
                        <a href="#">Style 1</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="blog-post.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-post-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-post-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Style 2</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="blog-post-style2.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-post-style2-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-post-style2-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="menu-item dropdown">
                <a href="#">PAGES</a>
                <ul class="submenu">
                  <li class="menu-item dropdown">
                    <a href="#">Gallery</a>
                    <ul class="submenu">
                      <li class="menu-item">
                        <a href="gallery.html">Gallery 4 Columns</a>
                      </li>
                      <li class="menu-item">
                        <a href="gallery-3columns.html">Gallery 3 Columns</a>
                      </li>
                      <li class="menu-item">
                        <a href="gallery-2columns.html">Gallery 2 Columns</a>
                      </li>
                      <li class="menu-item">
                        <a href="gallery-without-filters.html">Gallery Without Filters</a>
                      </li>
                      <li class="menu-item">
                        <a href="gallery-slider.html">Gallery Slider</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#">More Pages</a>
                    <ul class="submenu">
                      <li class="menu-item">
                        <a href="places.html">Places</a>
                      </li>
                      <li class="menu-item">
                        <a href="place-details.html">Place Details</a>
                      </li>
                      <li class="menu-item">
                        <a href="events.html">Events</a>
                      </li>
                      <li class="menu-item">
                        <a href="event-details.html">Event Details</a>
                      </li>
                      <li class="menu-item">
                        <a href="offers.html">Offers</a>
                      </li>
                      <li class="menu-item">
                        <a href="offer.html">Offer Details</a>
                      </li>
                      <li class="menu-item">
                        <a href="staff.html">Our Staff</a>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Loading Page</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="loading.html">Loading Page 1</a>
                          </li>
                          <li class="menu-item">
                            <a href="loading-style2.html">Loading Page 2</a>
                          </li>
                          <li class="menu-item">
                            <a href="loading-style3.html">Loading Page 3</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Coming Soon</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="coming-soon.html">Coming Soon Image</a>
                          </li>
                          <li class="menu-item">
                            <a href="coming-soon-video.html">Coming Soon Video</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="page.html">Right Sidebar Page</a>
                      </li>
                      <li class="menu-item">
                        <a href="page-left-sidebar.html">Left Sidebar Page</a>
                      </li>
                      <li class="menu-item">
                        <a href="page-full-width.html">Full Width Page</a>
                      </li>
                      <li class="menu-item">
                        <a href="404.html">404 Style 1</a>
                      </li>
                      <li class="menu-item">
                        <a href="404-style2.html">404 Style 2</a>
                      </li>
                      <li class="menu-item">
                        <a href="testimonials.html">Testimonials</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#">Contact</a>
                    <ul class="submenu">
                      <li class="menu-item">
                        <a href="contact.html">Contact Style 1</a>
                      </li>
                      <li class="menu-item">
                        <a href="contact-style2.html">Contact Style 2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#">Shop</a>
                    <ul class="submenu">
                      <li class="menu-item dropdown">
                        <a href="#">Shop</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="shop.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="shop-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="shop-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Shop Details</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="shop-details.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="shop-details-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="shop-details-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item">
                    <a href="restaurant.html">Our Restaurant</a>
                  </li>
                  <li class="menu-item">
                    <a href="spa.html">Our Spa</a>
                  </li>
                  <li class="menu-item">
                    <a href="about-us.html">About Us</a>
                  </li>
                  <li class="menu-item">
                    <a href="location.html">Our Location</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item dropdown">
                <a href="#">ELEMENTS</a>
                <ul class="submenu">
                  <li class="menu-item">
                    <a href="style-guide.html">Style Guide</a>
                  </li>
                  <li class="menu-item">
                    <a href="buttons.html">Buttons</a>
                  </li>
                  <li class="menu-item">
                    <a href="icons.html">Icons</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="contact.html">CONTACT US</a>
              </li>
              <li class="menu-item menu-btn">
                <a href="booking-form.html" class="btn">
                  <i class="fa fa-calendar"></i>
                  BOOK ONLINE</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>

      
<div>
      @yield('body')
</div>

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
              <div class="col-md-3">
                <div class="footer-widget">
                  <img src="styling/images/logo.svg" class="footer-logo" alt="easybooking">
                  <div class="inner">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat assumenda incidunt dolorem aliquam!</p>
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
              <div class="col-md-3">
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
              </div>
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
                        <a href="shop.html">Shop</a>
                      </li>
                      <li>
                        <a href="gallery.html">EasyBooking Gallery</a>
                      </li>
                      <li>
                        <a href="location.html">Our Location</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- WIDGET -->
              <div class="col-md-3">
                <div class="footer-widget">
                  <h3>Contact Info</h3>
                  <div class="inner">
                    <ul class="contact-details">
                      <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Lorem ipsum dolor, 25, EasyBooking</li>
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





    </body>
</html>