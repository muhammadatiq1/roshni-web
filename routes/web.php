<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/programs', function () {
    return view('pages.programs');
});

Route::get('/impact', function () {
    return view('pages.impact');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});
