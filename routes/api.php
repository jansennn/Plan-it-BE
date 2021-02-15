<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Auth', 'middleware' => 'cors'], function (){
   Route::post('signin', 'SignInController');
   Route::post('signout', 'SignOutController');

   Route::get('me', 'MeController');
});