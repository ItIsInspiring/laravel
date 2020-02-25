<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('map', function () {
    return view('map');
});

Route::get('events', function () {
    return view('events');
});

Route::get('links', function () {
    return view('links');
});

Route::get('forum', function () {
    return view('forum');
});

Route::get('subscribe', function () {
    return view('subscribe');
});

Route::get('signin', function () {
    return view('signin');
});

