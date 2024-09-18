<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;

Route::get('/about', [HomeController::class, 'about']);

Route::get('/', [ImagesController::class, 'index']);

Route::get('/create', [ImagesController::class, 'create']);

Route::get('/show/{id}', [ImagesController::class, 'show']);

Route::get('/edit/{id}', [ImagesController::class, 'edit']);

Route::post('/store', [ImagesController::class, 'store']);

Route::post('/update/{id}', [ImagesController::class, 'update']);

Route::get('/delete/{id}', [ImagesController::class, 'delete']);
