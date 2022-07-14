@extends('layouts.app')

@section('title')
    TravelPal
@endsection

@section('content')
  <div class="container">
    <div class="d-flex d-md-inline-flex flex-column flex-md-row justify-content-center">
        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" width="60"  height="60px" class="rounded-circle" style="margin: 0 auto;">        
        <h4 class="text-center mt-3" style="font-weight: 700;">Hello, {{ Auth::user()->name }}!</h4>
    </div>
    
  </div>
  
@endsection