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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//--------------------------------------------------------------------------------------------------------------------------------

Route::resource('movie', 'MovieController');

Route::get('movie/destroy/{id}', ['as' => 'movie/destroy', 'uses' => 'MovieController@destroy']);

Route::post('movie/search/{id}', ['as' => 'movie/search', 'uses' => 'MovieController@search']);

//--------------------------------------------------------------------------------------------------------------------------------

Route::resource('regional', 'Regional\RegionalController');

Route::get('Regional/destroy/{id}', ['as' => 'Regional/destroy', 'uses' => 'RegionalController@destroy']);

Route::post('Regional/search/{id}', ['as' => 'Regional/search', 'uses' => 'RegionalController@search']);

//--------------------------------------------------------------------------------------------------------------------------------


//--------------------------------------------------------------------------------------------------------------------------------


//--------------------------------------------------------------------------------------------------------------------------------


//--------------------------------------------------------------------------------------------------------------------------------


//--------------------------------------------------------------------------------------------------------------------------------