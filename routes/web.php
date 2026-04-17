<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/our-services', function () {
    return view('our-services');
})->name('our-services');

Route::get('/our-fleet', function () {
    return view('our-fleet');
})->name('our-fleet');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/book-online', function () {
    return view('book-online');
})->name('book-online');

