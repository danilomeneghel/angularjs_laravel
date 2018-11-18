<?php

Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/register', 'Auth\RegisterController@index');
Route::post('/register', 'Auth\RegisterController@create');

Auth::routes();

// Social Auth
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

// Routes after Auth
Route::middleware(['auth'])->group(function () {
  Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/profile', 'Auth\RegisterController@edit');
	Route::put('/profile', 'Auth\RegisterController@update');
});
