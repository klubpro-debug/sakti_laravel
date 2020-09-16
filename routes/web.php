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

Route::get('berita/{berita:slug}', 'BeritaController@show');

Route::get('berita', 'BeritaController@index');

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

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::resource('list_berita', 'BeritaController');
    Route::resource('list_galeri', 'GaleriController');
    Route::resource('pendaftaran', 'PendaftaranController');
    Route::resource('kategori', 'KategoriController');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

