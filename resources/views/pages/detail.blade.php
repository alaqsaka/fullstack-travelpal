@extends('layouts.app')

@section('title')
    Travel Details
@endsection

@section('content')
<main>
    <section class="section-details-header">
    </section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0 pl-3 pl-lg-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  Travel Package
                </li>
                <li class="breadcrumb-item active">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>{{ $item->title }}</h1>
              <p>{{ $item->location }}</p>
              

              @if ($item->galleries->count())
                <div class="gallery">
                  <div class="xzoom-container">
                    <img src="{{ url($item->galleries->first()->image) }}" 
                    alt="" srcset="" 
                    class="xzoom" 
                    id="xzoom-default" 
                    
                    xoriginal="{{ url($item->galleries->first()->image) }}">
                  </div>
                  <div class="xzoom-thumbs">
                      @foreach ($item->galleries as $gallery)
                        <a href="{{ Storage::url($gallery->image) }}"
                        ><img
                          class="xzoom-gallery"
                          width="128"
                          height="86"
                          src="{{ Storage::url($gallery->image) }}"
                          xpreview="{{ Storage::url($gallery->image) }}"
                      /></a>
                      @endforeach
                      
                    </div>
                </div>
              @endif

              <h2>
                About {{ $item->title }}
              </h2>
              <p>
                {{  $item->about  }}
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <div class="description">
                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="" srcset=""  class="features-img">
                    <div class="description">
                      <h3>Featured Event</h3>
                      <p>{{ $item->featured_event }}</p>
                    </div>
                   
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img src="{{ url('frontend/images/ic_bahasa.png') }}" alt="" srcset="" class="features-img">
                    <div class="description">
                      <h3>Language</h3>
                      <p>{{ $item->language }}</p>
                    </div>
                  
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img src="{{ url('frontend/images/ic_foods.png') }}" alt="" srcset="" class="features-img">
                    <div class="description">
                      <h3>Foods</h3>
                      <p>{{ $item->foods }}</p>
                    </div>
     
                  </div>
                </div>
                </div>
              </div>
             
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members are going</h2>
              <div class="members my-2">
                <!-- To do: Change this to individual picture -->
                <img src="{{ url('frontend/images/members.png') }}" alt="" class="member-image">
              </div>
              <hr>
              <h2>Trip Information</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Date of Departure</th>
                  <td width=""50% class="text-right">{{ \Carbon\Carbon::create($item->date_of_departure)->format('F n, Y') }}</td>
                </tr>
                <tr>
                  <th width="50%">Duration</th>
                  <td width=""50% class="text-right">{{ $item->duration }}</td>
                </tr>
                <tr>
                  <th width="50%">Type</th>
                  <td width=""50% class="text-right">{{ $item->type }}</td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width=""50% class="text-right">${{ $item->price }},00 / person</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              @auth
                <form action="{{ route('checkout_process', $item->id) }}" method="POST">
                  @csrf
                  <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                    Join Now
                  </button>
                </form>
              @endauth
              @guest
                <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                  Login or Register to Join
                </a>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>

    <script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        title: false,
        tint: '#333',
        Xoffset: 15
        });
    });
    </script>
@endpush