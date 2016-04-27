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

Route::post('auth/login', 'Auth\AuthController@authLogin');

Route::get('auth/login', function() {
    return view('signin.main');
});

Route::auth();

Route::get('/home', 'HomeController@index');
