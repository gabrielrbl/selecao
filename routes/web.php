<?php

use Illuminate\Support\Facades\Route;

Route::resource('filme', 'FilmeController');

Route::resource('genero', 'GeneroController');

Route::resource('ator', 'AtorController');

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('filme.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
