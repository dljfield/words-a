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

Route::get('/template/home', function() {
    return View::make('/template/home');
});

Route::get('/template/singlepost', function() {
    return View::make('/template/single_post');
});

Route::get('/template/directive/post', function() {
    return View::make('/template/directive/post');
});