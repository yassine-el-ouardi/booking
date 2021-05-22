@extends('layouts.main-layout')

@section('contact','active')

@section('body')
<!-- ========== PAGE TITLE ========== -->
     <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
     background-size: cover;">
         <div class="container">
           <div class="inner">
             <h1>CONTACT</h1>
             <ol class="breadcrumb">
               <li>
                 <a href="index.html">Home</a>
               </li>
               <li>Contact</li>
             </ol>
           </div>
         </div>
       </div>
       <!-- ========== MAIN ========== -->
       <main class="contact-page">
         <div class="container">
           <div class="row">
             <div class="col-md-8">
               <div class="section-title">
                 <h4>CONTACT US</h4>
                 <p class="section-subtitle">Let’s Talk</p>
               </div>
               <p>Contact us. Need assistance with your Booking? We'll get you the help you need. </p>
               <!-- CONTACT FORM -->
               <form method="POST" action={{ route('send') }}>
                 <div class="form-group">
                   <input type="text" class="form-control" name="name" placeholder="Name" type="text">
                 </div>
                 <div class="form-group">
                   <input type="text" class="form-control" name="email" placeholder="Email" type="email">
                 </div>
                 <div class="form-group">
                   <input type="text" class="form-control" name="phone" placeholder="Phone" type="text">
                 </div>
                 <div class="form-group">
                   <input type="text" class="form-control" name="subject" placeholder="Subject" type="text">
                 </div>
                 <div class="form-group">
                   <textarea type="text" class="form-control" name="message" placeholder="Message"></textarea>
                 </div>
                 <div class="form-group">
                   <button class="btn mt30" type="submit">SEND YOUR MESSAGE</button>
                 </div>
                 @csrf
               </form>
             </div>
             <div class="col-md-4">
               <div class="sidebar">
                 <div class="google-map">
                   <div class="toggle-streetview" id="openStreetView">
                     <i class="fa fa-street-view" aria-hidden="true"></i>
                   </div>
                   <div id="map-canvas"></div>
                 </div>
                 <div class="contact-details mt75">
                   <div class="contact-info">
                     <ul>
                       <li>
                         <a href="#">
                           <i class="fa fa-map-marker"></i>EST d'Agadir B.P 33/S, Agadir 80000</a>
                       </li>
                       <li>
                         <a href="#">
                           <i class="fa fa-envelope"></i>contact@easybooking.com</a>
                       </li>
                       <li>
                         <a href="#">
                           <i class="fa fa-phone"></i>+212600000000</a>
                       </li>
                       <li>
                         <a href="#">
                           <i class="fa fa-fax"></i>+212600000000</a>
                       </li>
                       <li>
                         <a href="#">
                           <i class="fa fa-globe"></i>www.easybooking.com</a>
                       </li>
                     </ul>
                   </div>
                   <div class="social-media mt50">
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
                     <a class="tripadvisor" data-original-title="Tripadvisor" data-toggle="tooltip" href="#">
                       <i class="fa fa-tripadvisor"></i>
                     </a>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </main>
       @endsection