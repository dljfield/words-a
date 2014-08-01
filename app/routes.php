<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', 'InitialController@index');

Route::get('/home', function() {
    return View::make('home');
});

Route::get('/singlepost', function() {
    return View::make('single_post');
});

Route::get('/template/post', function() {
    return View::make('/template/post');
});