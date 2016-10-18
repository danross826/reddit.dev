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





get('/', 'PostsController@index');


Route::get('/add/{a?}/{b?}',function($a = 1, $b = 2){

	$answer = $a + $b;

	return $answer;
});

get('/roll-dice/{guess}', 'HomeController@rollDice');

get('/increment', 'HomeController@showIncrement');

get('/uppercase', 'HomeController@showUppercase');

get('/uppercase/{word?}', 'HomeController@uppercase');

get('/increment/{number?}', 'HomeController@increment');

get('/counter/{count}', 'HomeController@counter');

get('/profile', function(){
	return redirect()->action('UsersController@show', Auth::id());
});

Route::resource('posts', 'PostsController');

Route::resource('users', 'UsersController', ['except' => ['create','store']]);


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('users/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



