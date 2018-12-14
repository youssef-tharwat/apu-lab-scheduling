<?php

Auth::routes();

Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/home', 'HomeController@index')->name('home');
