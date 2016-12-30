<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */

Route::get('/', function () {
     return view('index');
});

//Auth
Route::get('/signup', [
     "uses" => "Auth\RegisterController@getSingUpPage",
     "as" => "get_signup",
]);

Route::get('/signin', [
     "uses" => "Auth\LoginController@getSignInPage",
     "as" => "get_signin",
]);

Route::get('/signout', [
     "uses" => "Auth\LoginController@signOut",
     "as" => "signout",
]);

Route::post('/signup', [
     "uses" => "Auth\RegisterController@signUp",
     "as" => "signup",
]);

Route::post('/signin', [
     "uses" => "Auth\LoginController@signIn",
     "as" => "signin",
]);

Route::get('/home', [
     "uses" => "Controller@getHomePage",
     "as" => "home",
]);
//Auth end

Route::resource('posts', 'PostController');
Route::resource('types', 'TypeController');
Route::resource('categories', 'CategoryController');
