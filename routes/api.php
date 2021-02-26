<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function (){
   Route::post('signin', 'SignInController');
   Route::post('signout', 'SignOutController');
   Route::post('register', 'RegisterController');
   Route::get('me', 'MeController');
});

Route::get('inisiasi', 'RutePerjalananController@inisiasi');