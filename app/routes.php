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

Route::get('login','SessionsController@create');
Route::get('logout','SessionsController@destroy');

Route::resource('/','IntroController');
Route::resource('/Home','HomeController');
Route::resource('sessions','SessionsController');

/*Route::get('/',function()
{
	User::create([
		'username' => 'test',
		'email' => 'test@test.com',
		'password' => Hash::make('test')
	]);

});*/
