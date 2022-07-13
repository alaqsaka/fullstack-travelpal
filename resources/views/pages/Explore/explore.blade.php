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
              @foreach ($items as $item)
                <div class="col-md-6 col-lg-4 col-xl-3 col-sm-6 mb-3">
                  <div class="card" style="border-radius: 10px; height: 450px; max-height: 450px;">
                    <img src="{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}" class="card-img-top travel-card" alt="" height="180" width="427">
                    <div class="card-body">
                      <h6 class=""><strong>{{ $item->title }}</strong></h6>
                      <p style="font-weight: 300">{{ $item->location }}</p>
                      <p class="card-text">{{ Str::limit($item->about, 100) }}</p>
                      <div class="row">
                        <div class="col">
                          <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;<strong>{{ $item->type }}</strong></p>
                        </div>
                        <div class="col">
                          <i class="fas fa-bed"></i>&nbsp;&nbsp;<strong>{{ $item->duration }}</strong>
                        </div>
                      </div>
                      <a href="{{ url('/detail', $item->slug) }}" class="stretched-link"></a>
                    </div>
                  </div>
                </div>  
              @endforeach
            </div>
          </div>
        </div>
      </main>
@endsection