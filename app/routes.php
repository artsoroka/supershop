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

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
	Route::get('/', 'AdministrationController@index');

	Route::get('/categories', 'CategoriesController@listAll'); 
	Route::get('/categories/{category_id}', array(
		'as' => 'category_id', 
		'uses' => 'CategoriesController@view'
	)); 

	Route::get('/categories/new', 'CategoriesController@showCreationForm'); 
	Route::post('/categories/new', 'CategoriesController@createNew');

	Route::get('/categories/{category_id}/edit', array(
		'as' => 'category_id', 
		'uses' => 'CategoriesController@update'
	)); 

	Route::get('/categories/{category_id}/delete', array(
		'as' => 'category_id', 
		'uses' => 'CategoriesController@delete'
	)); 



});


Route::get( '/login',  'AuthController@showLoginForm');
Route::post('/login',  'AuthController@authenticateUser');
Route::get(	'/whoami', 'AuthController@whoami'); 
Route::get( '/logout', 'AuthController@logout'); 
