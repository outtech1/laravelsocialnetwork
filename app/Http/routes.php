<?php

/**
*Home
*/

Route::get('/', [
		'uses' => '\Chatty\Http\Controllers\HomeController@index',
		'as' => 'home',
	]);

/**Route::get('/alert', function(){
	return redirect()->route('home')->with('info','You have signed up!');
	});*/

/**
* Authentication
*/

Route::get('/signup',[
		'uses' => '\Chatty\Http\Controllers\AuthController@getSignup',
		'as' => 'auth.signup',
	]);

Route::post('/signup',[
		'uses' => '\Chatty\Http\Controllers\AuthController@postSignup',
	]);

Route::get('/signin',[
		'uses' => '\Chatty\Http\Controllers\AuthController@getSignin',
		'as' => 'auth.signin',
	]);

Route::post('/signin',[
		'uses' => '\Chatty\Http\Controllers\AuthController@postSignin',
	]);

Route::get('/signout',[
		'uses' => '\Chatty\Http\Controllers\AuthController@getSignout',
		'as' => 'auth.signout',
	]);