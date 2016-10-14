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

Route::get('/', function () {
    return view('welcome');
});




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

Route::resource('posts', 'PostsController');

Route::resource('users', 'UsersController');

// Route::get('orm-test',function()
// {
// 	$post1 = new \App\Models\Post();
// 	$post1->title = 'Eloquent is awesome!';
// 	$post1->url='https://laravel.com/docs/5.1/eloquent';
// 	$post1->content  = 'It is super easy to create a new post.';
// 	$post1->user_id = 1;
// 	$post1->save();

// 	$post2 = new \App\Models\Post();
// 	$post2->title = 'Eloquent is really easy!';
// 	$post2->url='https://laravel.com/docs/5.1/eloquent';
// 	$post2->content = 'It is super easy to create a new post.';
// 	$post2->user_id = 1;
// 	$post2->save();
// });

