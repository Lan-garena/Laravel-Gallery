<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/about', function () {
   return view('about');
});

Route::get('/', function () {
    $images = DB::table('images')
        ->select('*')
        ->get();
    $MyImages = $images->all();
    return view('welcome',['ImagesInView'=>$MyImages]);
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/show/{id}', function ($id) {
    $image = DB::table('images')
        ->select('*')
        ->where('id',$id)
        ->first();
    $myImage = $image->image;
    return view('show',['ImageInView'=>$myImage]);
});

Route::get('/edit/{id}', function ($id) {
    $image = DB::table('images')->select('*')->where('id',$id)->first();

    return view('edit',['ImageInView'=>$image]);
});

Route::post('/store', function (Request $request) {
    $image = $request->file('image');
    $filename = $request->image->store('uploads');

    DB::table('images')->insert([
        'image' => $filename
    ]);

    return redirect('/');
});

Route::post('/update/{id}', function (Request $request, $id) {
    $image = DB::table('images')->select('*')->where('id',$id)->first();
    Storage::delete($image->image);

    $filename = $request->image->store('uploads');

    DB::table('images')
        ->where('id', $id)
        ->update(['image' => $filename]);

    return redirect('/');
});

Route::get('/delete/{id}', function (Request $request, $id) {
    $image = DB::table('images')->select('*')->where('id',$id)->first();
    return view('delete',['ImageInView'=>$image]);
});
