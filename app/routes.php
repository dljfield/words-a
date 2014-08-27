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
Route::get('/posts/unpublished', ['before' => 'auth.jwt_token', 'uses' => 'PostController@unpublished']);
Route::get('/posts/unpublished/{id}', ['before' => 'auth.jwt_token', 'uses' => 'PostController@show']);
Route::get('/posts/{id}', 'PostController@show');

Route::post('/posts', ['before' => 'auth.jwt_token', 'uses' => 'PostController@store']);
Route::post('/posts/unpublished/{id}', ['before' => 'auth.jwt_token', 'uses' => 'PostController@publish']);

// AUTH
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');