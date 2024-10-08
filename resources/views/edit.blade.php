@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Edit Image</h1>
                <img src="/{{$ImageInView->image}}" alt="" class="img-thumbnail">
                <form action="/update/{{$ImageInView->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-control"><input type="file" name="image"></div>

                    <button type="submit" class="btn btn-warning">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
