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

Route::get('/', 'InitialController@index');

// ###########
// ### API ###
// ###########
Route::get('/posts', 'PostController@index');
Route::get('/posts/{id}', 'PostController@show');

Route::post('/posts', 'PostController@store');

Route::post('/login', function() {

    $email = Input::get('email');
    $password = Input::get('password');

    if (Auth::attempt(array('email' => $email, 'password' => $password))) {

        Session::put('user', [
                'email' => $email,
                'token' => Session::token()
            ]);

        return Response::make(Session::get('user'), 200);
    } else {
        return Response::make('Failure', 401);
    }

});

Route::post('/login/testing', function() {

    $user = Session::get('user');

    if (Input::get('email') == $user['email'] && Input::get('token') == $user['token']) {
        return "wooo";
    } else {
        return Session::all();
    }
});