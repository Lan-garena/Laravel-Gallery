@extends('layout')

@section('content')
    <div class="container">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            <div class="col-md-3 gallery-item">
                <div>
                    <img src="/image.png" alt="" class="img-thumbnail">
                    <button type="button" class="btn btn-danger mybutton">Danger</button>
                    <button type="button" class="btn btn-warning mybutton">Warning</button>
                    <button type="button" class="btn btn-info mybutton">Info</button>
                </div>
            </div>
            <div class="col-md-3 gallery-item">
                <div>
                    <img src="/image.png" alt="" class="img-thumbnail">
                    <button type="button" class="btn btn-danger mybutton">Danger</button>
                    <button type="button" class="btn btn-warning mybutton">Warning</button>
                    <button type="button" class="btn btn-info mybutton">Info</button>
                </div>
            </div>
            <div class="col-md-3 gallery-item">
                <div>
                    <img src="/image.png" alt="" class="img-thumbnail">
                    <button type="button" class="btn btn-danger mybutton">Danger</button>
                    <button type="button" class="btn btn-warning mybutton">Warning</button>
                    <button type="button" class="btn btn-info mybutton">Info</button>
                </div>
            </div>
            <div class="col-md-3 gallery-item">
                <div>
                    <img src="/image.png" alt="" class="img-thumbnail">
                    <button type="button" class="btn btn-danger mybutton">Danger</button>
                    <button type="button" class="btn btn-warning mybutton">Warning</button>
                    <button type="button" class="btn btn-info mybutton">Info</button>
                </div>
            </div>
        </div>
    </div>
@endsection
