<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('numeros');
});

Route::get('/numeros', function () {
    return view('numeros');
});

Route::post('/numeros', 'SomeController@testfunction');
