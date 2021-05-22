@extends('layouts.main-layout')

{{-- @section() --}}

@section('body')

      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>Booking Form</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>Booking Form</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main>
        <div class="container">
          <div class="row">
            <!-- CONTENT -->
            {{-- <div class="col-lg-9 col-12"> --}}
              <div class="section-title">
                <h4> Enter your details</h4>
                <p class="section-subtitle">Book your Room Now</p>
              </div>
              <!-- BOOKING FORM -->
              <form method="POST" action="{{ route("form1") }}">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>First Name</label>
                      <input name="firstname" type="text" class="form-control" placeholder="Your First Name">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input name="lastname" type="text" class="form-control" placeholder="Your Last Name">
                    </div>
                  </div>     

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email Address</label>
                      <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input name="phone" type="text" class="form-control" placeholder="Your Phone Number">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>City</label>
                      <select name="city" class="form-control" title="Select Your City" data-header="Select Your City" data-live-search="true" data-size="5">

                        @foreach ($cities as $city)
                        <option value="{{$city}}">{{$city}}</option>
                        @endforeach



                      </select>
                    </div>


                    
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Zip Code</label>
                      <input name="codepostal" type="text" class="form-control" placeholder="Your Zip Code">
                    </div>
                </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Address</label>
                      <input name="address" type="text" class="form-control" placeholder="Your Address">
                    </div>
                  </div>



                  <div class="col-md-6">
                    <div class="form-group">
                      <label>CHECK-IN/OUT
                        <a href="#" title="Check-In / Check-Out" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <input type="text" class="datepicker form-control " name="booking-date" readonly="readonly">
                    </div>
                  </div>
                  <div class="col-md-6">
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
                            <label>Cildren
                              <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Under 18 years" data-original-title="Children">
                                <i class="fa fa-info-circle"></i>
                              </a>
                            </label>
                            <div class="guests-button">
                              <div class="minus"></div>
                              <input type="text" name="childrenguests" class="booking-guests" value="0">
                              <div class="plus"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  

                  <div class="col-md-12">
                    <button type="submit" class="btn btn-book">BOOK A ROOM</button>
                  </div>
                </div>

                @csrf


              </form>
            {{-- </div> --}}


        </main>

@endsection