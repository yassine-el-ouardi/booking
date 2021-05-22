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
          {{-- <div class="row"> --}}

              <form method="POST" action="{{ route('make.payment') }}">

            @for ($i=1;$i<$N;$i++)
                
            
            <!-- CONTENT -->
            {{-- <div class="col-lg-9 col-12"> --}}
              <div class="section-title">
                <h4> Enter guest {{ $i }} details</h4>
              </div>
              <!-- BOOKING FORM -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Full Name</label>
                      <input name="fullname{{ $i }}" type="text" class="form-control" placeholder="Your Full Name">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Age</label>
                      <input name="age{{ $i }}" type="text" class="form-control" placeholder="Your Age">
                    </div>
                  </div>     

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Gender</label>
                      <input class="form-control" name="gender{{ $i }}" type="text" placeholder="Male or Female">
                    </div>
                  </div>

                </div>


                  @endfor
                  

                  <div class="col-md-12">
                    <button type="submit" class="btn btn-book">Pay {{ $total }}$</button>

                  </div>
                @csrf
              </form>
            {{-- </div> --}}


        </main>

@endsection