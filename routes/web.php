<?php

use App\Models\Division;
use App\Models\Executive;
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
    $executives = Executive::with('position', 'position.member')->get();
    $divisions = Division::with('leader', 'position', 'position.member')->get();

    return view('structure', compact('executives', 'divisions'));
})->name('structure');

Route::get('activities', function () {
    return view('activities');
})->name('activities');

Route::get('insights', function () {
    return view('insights');
})->name('insights');

Route::get('news', function () {
    return view('news');
})->name('news');

Route::get('post/{id}', function (string $id) {
    return view('post', compact('id'));
})->name('post');
