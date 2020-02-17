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
    return view('welcome');
});

Route::get('{pgTitle}', function ($pgTitle) {
    return view('montest', array('pgTitle' => $pgTitle, 'contenu1'=>'Voici le contenu 1', 'contenu2'=>'Voici encore le contenu 2' ));
});
