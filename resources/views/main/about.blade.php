@extends('layouts.main-layout')

@section('about','active')


@section('body')

     <!-- ========== PAGE TITLE ========== -->
     <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
     background-size: cover;">
         <div class="container">
           <div class="inner">
             <h1>ABOUT Easybooking</h1>
             <ol class="breadcrumb">
               <li>
                 <a href="index.html">Home</a>
               </li>
               <li>About Easybooking</li>
             </ol>
           </div>
         </div>
       </div>
       <!-- ========== MAIN ========== -->
       <main class="contact-page">
         <div class="container">
           <div class="entry">
             <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                      <h4 class="text-uppercase">EasyBooking. since 1945</h4>
                      <p class="section-subtitle">High quality accommodation services</p>
                    </div>
                    <div class="info-branding">
                      <p> Founded in 1996 in Agadir, EasyBooking.com has grown from a small Dutch startup to one of the world’s leading digital travel companies. Part of Booking Holdings Inc. (NASDAQ: BKNG), EasyBooking.com’s mission is to make it easier for everyone to experience the world.

                        By investing in the technology that helps take the friction out of travel, EasyBooking.com seamlessly connects millions of travellers with memorable experiences, a range of transport options and incredible places to stay - from homes to hotels and much more. As one of the world’s largest travel marketplaces for both established brands and entrepreneurs of all sizes, EasyBooking.com enables properties all over the world to reach a global audience and grow their businesses.
                        
                        EasyBooking.com is available in 43 languages and offers more than 28 million total reported accommodation listings, including over 6.2 million listings alone of homes, apartments and other unique places to stay. No matter where you want to go or what you want to do, EasyBooking.com makes it easy and backs it all up with 24/7 customer support. </p>
      
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
             <h4 class="text-uppercase mt40 mb20">Statistics</h4>
             <div class="row">
               <!-- ITEM -->
               <div class="col-md-3 col-6">
                 <div class="countup-box box-shadow-005">
                   <i class="flaticon-hotel"></i>
                   <span class="number" data-count={{ $rooms }}></span>
                   <div class="text">Rooms</div>
                 </div>
               </div>
               <!-- ITEM -->
               <div class="col-md-3 col-6">
                 <div class="countup-box box-shadow-005">
                   <i class="flaticon-hotel"></i>
                   <span class="number" data-count={{ $hotels }}></span>
                   <div class="text">Hotels</div>
                 </div>
               </div>
               <!-- ITEM -->
               <div class="col-md-3 col-6">
                 <div class="countup-box box-shadow-005">
                   <i class="flaticon-bell-boy"></i>
                   <span class="number" data-count={{ $bookings }}></span>
                   <div class="text">Bookings</div>
                 </div>
               </div>
               <!-- ITEM -->
               <div class="col-md-3 col-6">
                 <div class="countup-box box-shadow-005">
                   {{-- <i class="flaticon-sports"></i> --}}
                   <span class="number" data-count={{ $cities }}></span>
                   <div class="text">Cities</div>
                 </div>
               </div>


           </div>
         </div>
       </main>

@endsection