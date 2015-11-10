<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('guest/front');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('front', function () {
    return view('guest/front');
});

Route::get('guest', function () {
    return view('guest');
});

Route::resource('guest','GuestController');