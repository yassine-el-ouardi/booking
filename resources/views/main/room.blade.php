@extends('layouts.main-layout')

@section('body')
    
          <!-- ========== ROOM SLIDER ========== -->
          <div id="rev-slider-room" class="rev_slider room-slider-full-width" style="display:none; background: #444;" data-version="5.4.5">
            <ul>

              <!-- SLIDE NR. 1 -->
              <li data-transition="slidingoverlayright">
                <img src="{{$room->drive_image ?? "styling/images/rooms/single/full-slider/single1.jpg" }}" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              </li>

            </ul>
            <!-- ROOM TITLE -->
            <div class="tp-static-layers">
              <h1
                class="tp-static-layer tp-caption"
                data-startslide="0"
                data-endslide="99"
                data-fontsize="['80','60','50','40']"
                data-lineheight="['60','50','40','30']"
                data-frames='[{"delay":2000,"speed":750,"sfxcolor":"#ffffff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                data-x="['left','left','left','left']"
                data-hoffset="['15','15','15','15']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['-30','-30','0','0']"
                style="z-index: 11; color: #fff;">
                ROOM FOR {{ $room->guestnumber }} Persons</h1>
            </div>
            <!-- ROOM PRICE -->
            <div class="tp-static-layers">
              <span
                class="tp-static-layer tp-caption room-price"
                data-startslide="0"
                data-endslide="99"
                data-width="[100, 100, 100, 60]"
                data-height="[100, 100, 100, 60]"
                data-fontsize="['28','28','28','18']"
                data-lineheight="['100','100','100','60']"
                data-frames='[{"delay":2000,"speed":750,"sfxcolor":"#ffffff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                data-x="['right','right','right','right']"
                data-hoffset="['90','90','15','15']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['-30','-30','0','0']"
                style="z-index: 11; color: #fff; text-align: center;">
                {{ $room->price }}<small>/night</small>
              </span>
            </div>
          </div>
          <!-- ========== MAIN ========== -->
          <main class="room">
            <div class="container">
              <p class="dropcap">{{ $room->description }}
              </p>


              <div class="similar-rooms">
                <div class="section-title sm">
                  <h4>ROOM Informations</h4>
                </div>
                  <div class="container">
                    <p><b>Hotel Name: </b>{{ $hotel->name }}</p>
                    <p><b>Hotel Address: </b>{{ $hotel->Address }}</p>
                    <p><b>Floor : </b>{{ $room->floor }}</p>
                    <p><b>Room Number : </b>{{ $room->roomnumber }}</p>
                  </div>
                </div>
              
              <div class="section-title sm">
                <h4>BOOK THE ROOM</h4>
                </div>
              <div class="book">
                @livewire('panel',['id'=> $room->id])
                </div>

              
              <div class="section-title sm">
                <h4>Room SERVICES</h4>
                <p class="section-subtitle">Same services for all rooms in this hotel</p>
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

                <div class="similar-rooms">
                <div class="section-title sm">
                  <h4>Other ROOMS of this hotel</h4>
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
          </main>


@endsection