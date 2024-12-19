<?php

use Illuminate\Support\Facades\Route;

Route::get('images/{name}')
    ->name('image');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('structure', function () {
    return view('structure');
})->name('structure');
