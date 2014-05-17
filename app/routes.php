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

Route::get('/', 'HomeController@index');

Route::match(['GET', 'POST'], '/signin' , 'UserController@signin');

Route::match(['GET', 'POST'], '/signup', 'UserController@signup');

Route::get('/compte', 'UserController@compte');

Route::resource('article','ArticleController');

Route::match(['GET', 'POST'], '/article/create', 'ArticleController@create');

Route::match(['GET', 'POST'], '/article/edit', 'ArticleController@edit');

Route::get('/article/show', 'ArticleController@show');

Route::get('/logout', 'UserController@logout');


//Route::any('/signup', 'UserController@signup');
//Route::post('/signup', 'UserController@signup');