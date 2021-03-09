<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function (){
   Route::post('signin', 'SignInController');
   Route::post('signout', 'SignOutController');
   Route::post('register', 'RegisterController');
   Route::get('me', 'MeController');
});

Route::group(['prefix' => 'user'], function (){
    Route::get('inisiasi', 'RutePerjalananController@inisiasi');

    //test mutation
    Route::get('testMutation', 'RutePerjalananController@mutation');
});

Route::group(['prefix' => 'admin'], function (){
    Route::get('destinasis', 'DestinasiController@index');
    Route::get('kabupatens', 'KabupatenController@index');
    Route::get('categoryWisatas', 'CategoryWisataController@index');

    //add Destination
    Route::post('destinasi', 'DestinasiController@store');
});

