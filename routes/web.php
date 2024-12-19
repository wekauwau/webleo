<?php

use Illuminate\Support\Facades\Route;

Route::get('images/{name}')
    ->name('image');

Route::get('/', function () {
    return view('home');
})->name('home');
