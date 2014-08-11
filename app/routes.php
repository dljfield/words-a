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

Route::get('/', 'IndexController@index');

// *******
// * API *
// *******

// POSTS
Route::get('/posts', 'PostController@index');
Route::get('/posts/unpublished', 'PostController@unpublished');
Route::get('/posts/{id}', 'PostController@show');

Route::post('/posts', 'PostController@store');

// AUTH
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');



Route::get('/testing', function() {
    $key = "example_key";
    $token = array(
        "iss" => "http://example.org",
        "aud" => "http://example.com",
        "iat" => 1356999524,
        "nbf" => 1357000000
    );

    $jwt = JWT::encode($token, $key);
    $decoded = JWT::decode($jwt, $key);

    print_r($decoded);
});