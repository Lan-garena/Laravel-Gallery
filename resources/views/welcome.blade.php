@extends('layout')

@section('content')
    <div class="container">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            @foreach($ImagesInView as $image)
            <div class="col-md-3 gallery-item">
                <div>
                    <img src="/{{$image->image}}" alt="" class="img-thumbnail gallery-image">
                    <a href="/delete/{{$image->id}}" onclick="return confirm('Are you sure?')" class="btn btn-danger mylink">Delete</a>
                    <a href="/edit/{{$image->id}}" class="btn btn-warning mylink">Edit</a>
                    <a href="/show/{{$image->id}}" class="btn btn-info mylink">Show</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
