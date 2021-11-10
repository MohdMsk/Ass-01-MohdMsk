<?php


Route::get('/', function () {
    return view('first');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/first', function () {
    return view('first');
});

Route::get('/index', function () {
    return view('cvs.index');
});

Route::get('/create', function () {
    return view('cvs.create');
});

Route::resource('cvs','CVController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
