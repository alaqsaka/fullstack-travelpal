@extends('layouts.app')

@section('title')
    TravelPal
@endsection

@section('content')
       {{-- Header --}}
       <header class="text-center">
        <h1>
          Explore The Beautiful World
          <br />
          As Easy One Click
        </h1>
        <p class="mt-3">
          You will see beautiful
          <br />
          moment you never see before
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
          Get Started
        </a>
      </header>
  
      <main>
        <!-- Stats -->
        <div class="container">
          <section class="section-stats row justify-content-center" id="stats">
            <div class="col-md-2 stats-detail col-6">
              <h2>20K</h2>
              <p>Members</p>
            </div>
            <div class="col-md-2 stats-detail col-6">
              <h2>12</h2>
              <p>Countries</p>
            </div>
            <div class="col-md-2 stats-detail col-6">
              <h2>3K</h2>
              <p>Hotels</p>
            </div>
            <div class="col-md-2 stats-detail col-6">
              <h2>72</h2>
              <p>Partners</p>
            </div>
          </section>
        </div>
  
        <!-- Popular -->
        <section class="section-popular" id="popular">
          <div class="container">
            <div class="row">
              <div class="col text-center section-popular-heading">
                <h2>Popular Tour Package</h2>
                <p>
                  Something that you never try
                  <br />
                  before in this world
                </p>
              </div>
            </div>
          </div>
        </section>
  
        <!-- Popular Content -->
        <section class="section-popular-content" id="popularContent">
          <div class="container">
            <div class="section-popular-travel row justify-content-center">
              @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card-travel text-center d-flex flex-column" 
                  style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}') ;">
                    <div class="travel-country">
                      {{ $item->title }}
                    </div>
                    <div class="travel-location">{{ $item->location }}</div>
                    <div class="travel-button mt-auto">
                      <a href="{{ url('/detail', $item->slug) }}" class="btn btn-travel-details px-4">
                        View Details
                      </a>
                    </div>
                  </div>
                </div>
              @endforeach
              
              
            </div>
          </div>
        </section>
  
  
        <!-- Networks -->
        <section class="section-networks" id="networks">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2>Our Networks</h2>
                <p>
                  Companies are trusted us
                  <br />
                  more than just a trip
                </p>
              </div>
              <div class="col-md-8 text-center">
                <img src="./frontend/images/partner.png" alt="Logo Partner" class="img-partner">
              </div>
            </div>
          </div>
        </section>
  
        <!-- Testimonial -->
        <section class="section-testimonial-heading" id="testimonial-heading">
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <h2>Our Happy Customers</h2>
                <p>Moments were giving them<br />the best experience</p>
              </div>
            </div>
          </div>
        </section>
  
        <!-- Testimonial Cards -->
        <section class="section-testimonial-content" id="testimonial-content">
          <div class="container">
            <div class="section-popular-travel row justify-content-center">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <img src="frontend/images/avatar-1.png" alt="Happy Customer 1, John Doe" class="mb-4 rounded-circle">
                    <h3 class="mb-4">
                      John Doe
                    </h3>
                    <p class="testimonial">
                      "I just wanted to share a quick note and let you know that you guys do a really good job. I’m glad I decided to work with you. It’s really great how easy your websites are to update and manage."
                    </p>
                  </div>
                  <hr>
                  <p class="trip-to mt-2">
                    Trip to Bali
                  </p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <img src="frontend/images/avatar-2.png" alt="Happy Customer 1, John Doe" class="mb-4 rounded-circle">
                    <h3 class="mb-4">
                      Scarlett Johansson
                    </h3>
                    <p class="testimonial">
                      "I would like to say a big "Thank you" for your immense effort and support. In addition, I have a feeling that out further trips are going to be great as well, good luck to the team"
                    </p>
                  </div>
                  <hr>
                  <p class="trip-to mt-2">
                    Trip to Singapore
                  </p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <img src="frontend/images/avatar-3.png" alt="Happy Customer 1, John Doe" class="mb-4 rounded-circle">
                    <h3 class="mb-4">
                      Egill Erlendsson
                    </h3>
                    <p class="testimonial">
                      "I thoroughly enjoy using TravelPal, used to it to book +100 trips for holiday and business. Incredible Services and amazing customer support. "
                    </p>
                  </div>
                  <hr>
                  <p class="trip-to mt-2">
                    Trip to Japan
                  </p>
                </div>
              </div>
            </div>
  
            <div class="row">
              <div class="col-12 text-center">
                <a href="" class="btn btn-need-help px-4 mt-4 mx-1">
                  I Need Help
                </a>
                <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                  Get Started
                </a>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection