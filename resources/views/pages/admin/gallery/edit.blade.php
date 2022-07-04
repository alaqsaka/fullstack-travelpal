@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Travel Package {{ $item->title }} </h1>
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
                    <form action="{{ route('gallery.update', $item->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $item->title }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Location</label>
                            <input type="text" class="form-control" name="location" id="location" value="{{ $item->location }}">
                        </div>
                        <div class="form-group">
                            <label for="about">About This Trip</label>
                            <textarea name="about" id="about" rows="3" class="form-control d-block w-100">{{ $item->about }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="featured_event">Featured Event</label>
                            <input type="text" class="form-control" name="featured_event" id="featured_event" value="{{ $item->featured_event }}">
                        </div>
                        <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" class="form-control" name="language" id="language" value="{{ $item->language }}">
                        </div>
                        <div class="form-group">
                            <label for="foods">Foods</label>
                            <input type="text" class="form-control" name="foods" id="foods" value="{{ $item->foods }}">
                        </div>
                        <div class="form-group">
                            <label for="departure_date">Departure Date</label>
                            <input type="date" class="form-control" name="departure_date" id="departure_date" value="{{ $item->departure_date }}">
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" name="duration" id="duration" value="{{ $item->duration }}">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{ $item->type }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" id="price" value="{{ $item->price }}">
                        </div>
                        <button class="btn btn-primary btn-block">Update</button>
                    </form>
                    
                </div>
            </div>


        </div>
    <!-- /.container-fluid -->
@endsection