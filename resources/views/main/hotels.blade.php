@extends('layouts.main-layout')

@section('body')
    


<!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(styling/images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>SEARCH</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>Search</li>
            </ol>
          </div>
        </div>
      </div>


	  <main class="rooms-list-view">

      			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Search Filter -->
						<form method="POST" action="{{ route("search") }}">

							<div class="card search-filter">
								<div class="card-header">
									<h4 class="card-title mb-0">Search Filter</h4>
								</div>
								<div class="card-body">
								<div class="filter-widget">
									<div class="cal-icon">
										<div class="form-group">
											<label>Check-In/Out
											  <a href="#" title="Check-In / Check-Out" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select check-in and check-out date">
												<i class="fa fa-info-circle"></i>
											  </a>
											</label>
											<input type="text" class="datepicker form-control" name="time_from" placeholder="Arrival & Departure" readonly="readonly">
										</div>
									</div>			
								</div>
								<div class="filter-widget">
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
								<div class="filter-widget">
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
								{{-- <div class="filter-widget">
									<h4>Select Specialist</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> Urology
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> Neurology
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Dentist
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Orthopedic
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Cardiologist
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Cardiologist
										</label>
									</div>
								</div> --}}
									<div class="btn-search">
										<button type="submit" class="btn btn-book">BOOK A ROOM</button>									</div>	
									</div>
							</div>
							<!-- /Search Filter -->
							
							</div>
						@csrf
						</form>						
						<div class="col-md-12 col-lg-8 col-xl-9">


            	@foreach ($hotels as $hotel)
				  
			  
              
							<div class="container">
								<!-- ITEM -->
								<div class="room-list-item">
								  <div class="row">
									<div class="col-lg-4">
										<a href="room.html"><img src={{ $hotel->drive_image ?? "styling/images/rooms/single/single1.jpg"}} class="img-fluid" alt="Image"></a>
									</div>
									<div class="col-lg-5">
									  <div class="room-info">
										<h3 class="room-title">
										  <a href="room.html">{{ $hotel->name }}</a>
										</h3>
										<span class="room-rates">
											@for ($i = 0; $i < $hotel->stars ; $i++)
											  <i class="fa fa-star" aria-hidden="true"></i>		
											@endfor
											@for ($i = 0; $i < (5 -  $hotel->stars ); $i++)
											  <i class="fa fa-star-o" aria-hidden="true"></i>		
											@endfor											
										</span>
										<p>{{ $hotel->description ??  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis..."}}</p>
										<div class="room-services">
										  <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
										  <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
										  <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
										  <span>City: {{ $hotel->city->ville }}</span>
										</div>
									  </div>
									</div>
									<div class="col-lg-3">
									  <div class="room-price">
										<span class="price">{{$hotel->main_price ?? '$0'}} / night</span>
										<a href="hotel?id={{ $hotel->id }}"  name="details" class="btn btn-sm" >VIEW DETAILS</a>
									</div>
									</div>
								  </div>
								</div>
							</div>


				@endforeach              
            </div>


@endsection
