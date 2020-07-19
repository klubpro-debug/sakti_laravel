<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/berita', function () {
    return view('berita');
});
Route::get('/detailberita', function () {
    return view('detailberita');
});

Route::get('/divisi', function () {
    return view('divisi');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/form', function () {
    return view('form.form');
});
