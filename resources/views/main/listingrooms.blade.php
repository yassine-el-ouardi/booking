@extends('layouts.main-layout')

@section('body')

      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>ROOMS</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>Rooms</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="rooms-list-view">
        <div class="container">

            @foreach ($rooms as $room)
                

          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room?id={{ $room->id }}"><img src="{{ $room->drive_image ?? "styling/images/rooms/single/single1.jpg" }}" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room?id={{ $room->id }}">ROOM FOR {{ $room->guestnumber }} PERSONS</a>
                  </h3>
                  <span class="room-rates">
                    @for ($i = 0; $i < $room->hotel->stars ; $i++)
                    <i class="fa fa-star" aria-hidden="true"></i>		
                  @endfor
                  @for ($i = 0; $i < (5 -  $room->hotel->stars ); $i++)
                    <i class="fa fa-star-o" aria-hidden="true"></i>		
                  @endfor	
                  </span>
                  <p>{{ $room->description }}</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Max Guests: {{ $room->guestnumber }}</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">{{ $room->price ?? '0$' }} / night</span>
                  <a href="room?id={{ $room->id }}" class="btn btn-sm">VIEW DETAILS</a>
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
                <a href="/rooms?page={{ $i }}">{{ $i }}</a>
              </li>
                @endfor
            </ul>
          </nav>
        </div>
      </main>

@endsection