<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
   return view('about');
});

Route::get('/', function () {
    $images = DB::table('images')
        ->select('*')
        ->get();
    $MyImages = $images->pluck('image')->all();
    return view('welcome',['ImagesInView'=>$MyImages]);
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::post('/store', function (Request $request) {
    $image = $request->file('image');
    $filename = $request->image->store('uploads');

    DB::table('images')->insert([
        'image' => $filename
    ]);

    return redirect('/');
});
