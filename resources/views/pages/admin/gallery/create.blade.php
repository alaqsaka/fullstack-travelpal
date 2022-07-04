@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Create New Travel Package</h1>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('gallery.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Location</label>
                            <input type="text" class="form-control" name="location" id="location" value="{{ old('location') }}">
                        </div>
                        <div class="form-group">
                            <label for="about">About This Trip</label>
                            <textarea name="about" id="about" rows="3" class="form-control d-block w-100">{{ old('about') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="featured_event">Featured Event</label>
                            <input type="text" class="form-control" name="featured_event" id="featured_event" value="{{ old('featured_event') }}">
                        </div>
                        <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" class="form-control" name="language" id="language" value="{{ old('language') }}">
                        </div>
                        <div class="form-group">
                            <label for="foods">Foods</label>
                            <input type="text" class="form-control" name="foods" id="foods" value="{{ old('foods') }}">
                        </div>
                        <div class="form-group">
                            <label for="departure_date">Departure Date</label>
                            <input type="date" class="form-control" name="departure_date" id="departure_date" value="{{ old('departure_date') }}">
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" name="duration" id="duration" value="{{ old('duration') }}">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{ old('type') }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" id="price" value="{{ old('price') }}">
                        </div>
                        <button class="btn btn-primary btn-block">Submit</button>
                    </form>
                    
                </div>
            </div>


        </div>
    <!-- /.container-fluid -->
@endsection