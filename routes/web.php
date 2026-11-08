<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/photos', function () {
    return view('photos');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    return redirect('/home');
});