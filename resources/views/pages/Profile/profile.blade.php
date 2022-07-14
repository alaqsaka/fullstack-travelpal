<link rel="stylesheet" href="{{ url('frontend/styles/profile.css') }}">
@extends('layouts.app')

@section('title')
    TravelPal
@endsection

@section('content')  
  <div class="container mt-5">
    <div class="d-flex d-md-inline-flex flex-column flex-md-row justify-content-center">
        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" width="60"  height="60px" class="rounded-circle profile-photo" style="margin: 0 auto;">        
        <h4 class="text-center mt-3 profile-name" style="font-weight: 700;">Halo, <span class="text-orange">{{ Auth::user()->name }}!</span></h4>
    </div>
  </div>
  
  <div class="content mt-5">
    <div class="container p-4">
      {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">home</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">profile</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">contact</div>
      </div> --}}

      <div class="row">
        <div class="col-md-3">
          <div class="card" style="border-radius: 10px 10px 10px 10px">
            <ul class="d-flex nav nav-tabs flex-column" id="myTab" role="tablist" style="border: none;">
              <li class="nav-item tab-nav-link">
                <a class="nav-link active" id="personal-information-tab" data-toggle="tab" href="#personal-information" role="tab" aria-controls="personal-information" aria-selected="true">
                  <i class="fas fa-user"></i>&nbsp;&nbsp;Personal Information</a>
              </li>
              <li class="nav-item tab-nav-link">
                <a class="nav-link " id="change-password-tab" data-toggle="tab" href="#change-password" role="tab" aria-controls="change-password" aria-selected="false">
                  <i class="fas fa-lock"></i>&nbsp;&nbsp;Change Password</a>
              </li>
              <li class="nav-item tab-nav-link">
                <a class="nav-link " id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">
                  <i class="fas fa-credit-card"></i>&nbsp;&nbsp;Transaction</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card p-2"  style="border-radius: 10px">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="personal-information" role="tabpanel" aria-labelledby="personal-information-tab">
                <h3 class="text-center" style="font-weight: 700">Edit Your Profile</h3>
              </div>
              <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                <h3 class="text-center" style="font-weight: 700">Change Your Password</h3>
              </div>
              <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                <h3 class="text-center" style="font-weight: 700">Your Transcation</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection