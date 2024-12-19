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
