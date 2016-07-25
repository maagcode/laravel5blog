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

Route::get('/', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@single'])->where('slug', '[\w\d\-\_]+');
Route::resource('posts', 'PostController');
