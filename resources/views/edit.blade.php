@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Edit Image</h1>
                <form action="" method="post">
                    <img src="/image.png" alt="" class="img-thumbnail">
                    <div class="form-control"><input type="file"></div>

                    <button type="submit" class="btn btn-warning">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
