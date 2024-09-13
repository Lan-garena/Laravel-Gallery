<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
   return view('about');
});

Route::get('/', function () {
    return view('welcome');
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

Route::post('/bla', function () {
    return view('create');
});
