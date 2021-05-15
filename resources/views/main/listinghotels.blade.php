@extends('layouts.main-layout')

@section('hotels','active')

@section('body')

      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>HOTELS</h1>
            <ol class="breadcrumb">
              <li>
                <a href="#">Home</a>
              </li>
              <li>Hotels</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="rooms-list-view">
        <div class="container">

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

          <!-- PAGINATION -->
          <nav class="pagination">
            <ul>

                @for ($i=1;$i<($N / 3)+1;$i++)
              <li class="active">
                <a href="/hotels?page={{ $i }}">{{ $i }}</a>
              </li>
                @endfor
            </ul>
          </nav>
        </div>
      </main>

@endsection