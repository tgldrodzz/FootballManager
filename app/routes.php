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

Route::get('/', function()
{
	return View::make('hello');
});

# ACCOUNT ROUTES
Route::get('/register', ['as' => 'register', 'uses' => 'AccountController@create']);
Route::post('/register', ['as' => 'register', 'uses' => 'AccountController@store']);


#SESSION ROUTES
Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::post('/login', ['as' => 'login', 'uses' => 'SessionsController@store']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);

# PLAYER
Route::get('{username}/players', ['as' => 'players', 'uses' => 'PlayerController@index']);

# PROFILE
Route::get('{username}', ['as' => 'profile', 'uses' => 'ProfileController@show']);



