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
	return "hello"; 
});

Route::get( 'login',  'AuthController@showLoginForm');
Route::post('login', 'AuthController@authenticateUser');
Route::get('whoami', 'AuthController@whoami'); 
Route::get( 'logout', 'AuthController@logout'); 
