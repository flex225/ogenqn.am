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
    return view('welcome');
});

//Auth
Route::get('/signup', [
	"uses" => "\App\Http\Controllers\Auth\RegisterController@getSingUpPage",
	"as" => "get_singup"
]);

Route::get('/signin', [
	"uses" => "\App\Http\Controllers\Auth\AuthController@getSignInPage",
	"as" => "get_signin"

]);

Route::get('/signout', [
	"uses" => "\App\Http\Controllers\Auth\AuthController@signOut",
	"as" => "signout"
]);

Route::post('/signup', [
	"uses" => "\App\Http\Controllers\Auth\RegisterController@signUp",
	"as" => "signup"
]);

Route::post('/signin', [
	"uses" => "\App\Http\Controllers\Auth\AuthController@signIn",
	"as" => "signin"
]);
//Auth end