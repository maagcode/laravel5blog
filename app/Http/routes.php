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

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Static pages routes
Route::get('/', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

// Blog routes
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@single'])->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['uses' => 'BlogController@blogIndex', 'as' => 'blog.index']);

// Resources routes
Route::resource('posts', 'PostController');
