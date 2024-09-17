@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Delete Image</h1>
                <img src="/{{$ImageInView->image}}" alt="" class="img-thumbnail">
                <form action="/delete/{{$ImageInView->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
