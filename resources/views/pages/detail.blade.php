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
              <h1>Nusa Penida</h1>
              <p>Indonesia</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="{{ url('frontend/images/details-1.jpg') }}" 
                  alt="" srcset="" 
                  class="xzoom" 
                  id="xzoom-default" 
                  xoriginal="frontend/images/details-1.jpg">
                </div>
                <div class="xzoom-thumbs">
                    <a href="frontend/images/details-1.jpg"
                      ><img
                        class="xzoom-gallery"
                        width="128"
                        src="frontend/images/details-1.jpg"
                        xpreview="frontend/images/details-1.jpg"
                    /></a>
                    <a href="frontend/images/details-1.jpg"
                      ><img
                        class="xzoom-gallery"
                        width="128"
                        src="frontend/images/details-1.jpg"
                        xpreview="frontend/images/details-1.jpg"
                    /></a>
                    <a href="frontend/images/details-1.jpg"
                      ><img
                        class="xzoom-gallery"
                        width="128"
                        src="frontend/images/details-1.jpg"
                        xpreview="frontend/images/details-1.jpg"
                    /></a>
                    <a href="frontend/images/details-1.jpg"
                      ><img
                        class="xzoom-gallery"
                        width="128"
                        src="frontend/images/details-1.jpg"
                        xpreview="frontend/images/details-1.jpg"
                    /></a>
                    <a href="frontend/images/details-1.jpg"
                      ><img
                        class="xzoom-gallery"
                        width="128"
                        src="frontend/images/details-1.jpg"
                        xpreview="frontend/images/details-1.jpg"
                    /></a>
                  </div>
              </div>
              <h2>
                About Nusa penida
              </h2>
              <p>
                Nusa Penida is the largest and most exotic of the 3 Nusa islands, thanks to its collection of unique Hindu temples and picturesque natural features of cliff formations and lagoons. More recently, the island became best known as the new sanctuary of the once-endangered Bali starling (originally an endemic species from the forested region of West Bali National Park) following a highly successful captive breeding programme. 
              </p>
              <p>
                Nusa Penida measures over 200 sq km – significantly larger than the popular Nusa Lembongan and its accessible sister island, Nusa Ceningan. Lesser-travelled compared to the other 2, Nusa Penida has a very limited number of hotels and tourist features. Even so, what it lacks in infrastructure, it makes up for with unspoiled natural beauty and rare cultural highlights.
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <div class="description">
                    <img src="frontend/images/ic_event.png" alt="" srcset=""  class="features-img">
                    <div class="description">
                      <h3>Featured Event</h3>
                   <p>Tari Kecak</p>
                    </div>
                   
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img src="frontend/images/ic_bahasa.png" alt="" srcset="" class="features-img">
                    <div class="description">
                      <h3>Language</h3>
                      <p>Bahasa Indonesia</p>
                    </div>
                  
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img src="frontend/images/ic_foods.png" alt="" srcset="" class="features-img">
                    <div class="description">
                      <h3>Foods</h3>
                      <p>Local Foods</p>
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
                <img src="frontend/images/members.png" alt="" class="member-image">
              </div>
              <hr>
              <h2>Trip Information</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Date of Departure</th>
                  <td width=""50% class="text-right">22 June 2022</td>
                </tr>
                <tr>
                  <th width="50%">Duration</th>
                  <td width=""50% class="text-right">4D 3N</td>
                </tr>
                <tr>
                  <th width="50%">Type</th>
                  <td width=""50% class="text-right">Open Trip</td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width=""50% class="text-right">$80,00 / person</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                Join Now
              </a>
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