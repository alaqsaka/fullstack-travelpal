<link rel="stylesheet" href="{{ url('frontend/styles/explore.css') }}">
@extends('layouts.app')

@section('title')
    TravelPal - Explore
@endsection

@section('content')  
    {{-- Header --}}
    <div class="header">
      <div class="container">
       <h1> Collect moments, not things</h1>
       <p>Plan and book your ultimate trip with experts advice, travel <br>
         tips, destination, and inspiration from us</p>
      </div>
    </div>
    

      <main>
        <div class="container">
          <div class="mt-4">
            <h1 class="tes">Popular Trips</h1>
            <div class="row">
              <div class="col-md-6 col-lg mt-2">
                
                  <div class="card" style="border-radius: 10px">
                  <img src="{{ url("frontend/images/header-background@2x.jpg") }}" class="card-img-top travel-card" alt="">
                  <div class="card-body">
                    <h6 class=""><strong>Explore Bali </strong></h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="row">
                      <div class="col">
                        <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;<strong>Bali</strong></p>
                      </div>
                      <div class="col">
                        <i class="fas fa-bed"></i>&nbsp;&nbsp;<strong>2 Nights</strong>
                      </div>
                    </div>
                    <a href="#" class="stretched-link"></a>

                  </div>
                </div>
                
              </div>
              
            </div> 
            
          </div>
        </div>
      </main>
@endsection