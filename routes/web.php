<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', 'HomeController');

Route::resource('about', 'AboutController');

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

Route::get('dashboard', 'Admin\HomeController@index')->name('home');

Route::resource('daftar', 'PendaftaranController');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'Admin\UserController', ['except' => ['show']]);
    Route::resource('list_berita', 'Admin\BeritaController');
    Route::resource('list_galeri', 'Admin\GaleriController');
    Route::resource('pendaftaran', 'Admin\PendaftaranController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('info', 'InfoController');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'Admin\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'Admin\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'Admin\ProfileController@password']);
});

