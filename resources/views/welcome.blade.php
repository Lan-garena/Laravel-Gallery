@extends('layout')

@section('content')
    <div class="container">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            <div class="col-md-3 gallery-item">
                <div>
                    <img src="/image.png" alt="" class="img-thumbnail">
                    <a href="#" class="btn btn-danger mylink">Delete</a>
                    <a href="/edit" class="btn btn-warning mylink">Edit</a>
                    <a href="/show" class="btn btn-info mylink">Show</a>
                </div>
            </div>
            <div class="col-md-3 gallery-item">
                <div>
                    <img src="/image.png" alt="" class="img-thumbnail">
                    <a href="#" class="btn btn-danger mylink">Delete</a>
                    <a href="/edit" class="btn btn-warning mylink">Edit</a>
                    <a href="/show" class="btn btn-info mylink">Show</a>
                </div>
            </div>
            <div class="col-md-3 gallery-item">
                <div>
                    <img src="/image.png" alt="" class="img-thumbnail">
                    <a href="#" class="btn btn-danger mylink">Delete</a>
                    <a href="/edit" class="btn btn-warning mylink">Edit</a>
                    <a href="/show" class="btn btn-info mylink">Show</a>
                </div>
            </div>
            <div class="col-md-3 gallery-item">
                <div>
                    <img src="/image.png" alt="" class="img-thumbnail">
                    <a href="#" class="btn btn-danger mylink">Delete</a>
                    <a href="/edit" class="btn btn-warning mylink">Edit</a>
                    <a href="/show" class="btn btn-info mylink">Show</a>
                </div>
            </div>
        </div>
    </div>
@endsection
