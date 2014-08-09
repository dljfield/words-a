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
Route::get('/posts', 'PostsController@index');
Route::get('/posts/unpublished', 'PostsController@unpublished');
Route::get('/posts/{id}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

// AUTH
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');


// *************
// * TEMPLATES *
// *************

Route::group(['prefix' => 'template'], function()
{
    // POSTS
    Route::get('/posts', 'TemplateController@postsIndex');
    Route::get('/posts/single', 'TemplateController@postsShow');
    Route::get('/posts/create', 'TemplateController@postsCreate');

    // AUTH
    Route::get('/login', 'TemplateController@loginShow');
});