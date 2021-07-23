<?php

//FUNCTION FOR AUTHENTICATION
Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function (){
   Route::post('signin', 'SignInController');
   Route::post('signout', 'SignOutController');
   Route::post('register', 'RegisterController');
   Route::get('me', 'MeController');
});

//FUNCTION FOR USER
Route::group(['prefix' => 'user'], function (){
    //INISIASI
    Route::get('inisiasi', 'RutePerjalananController@inisiasi');

    //MAKE PLAN
    Route::post('plan/create', 'PlanController@makeplan');

    //test
    Route::post('testInisiasi', 'RutePerjalananController@inisiasi');
    Route::get('testMutation', 'RutePerjalananController@mutation');

    //DESTINATION
    Route::get('destinasis', 'DestinasiController@index');

    //DETAIL DESTINATION
    Route::get('destinasi/{id}', 'DestinasiController@find');

    //TEST DOANG
    Route::get('history_rute_perjalanan/{id}', 'RutePerjalananController@displayRutePerjalanan');

    //GET RUTE PERJALANAN UPCOMING BY USER ID
    Route::get('rute_perjalanan_upcoming/{id}', 'RutePerjalananController@rutePerjalananUpcomingByUserId');

    //GET RUTE PERJALANAN PAST TRIP BY USER ID
    Route::get('rute_perjalanan_past/{id}', 'RutePerjalananController@rutePerjalananPastByUserId');

    //SEATCH DESTINATION
    Route::get('search_destination/{q}', 'DestinasiController@search');

    //INPUT BUDGET
    Route::post('rute_perjalanan/input_budget/{id}', 'InputBudgetController@inputBudget');

    //TRENDING
    Route::get('rute_perjalanan/trending', 'RutePerjalananController@trending');

    //DELETE RUTE PERJALANAN BY ID
    Route::delete('rute_perjalanan/{id}', 'RutePerjalananController@deleteRutePerjalananById');

    //UPDATE RUTE PERJALANAN REALTIME
    Route::get('rute_perjalanan_update/{id}', 'RutePerjalananController@updateRutePerjalanan');
});

//FUNCTION FOR ADMIN
Route::group(['prefix' => 'admin'], function (){
    //DISPLAY ALL DESTINATION
    Route::get('destinasis', 'DestinasiController@index');

    //GET ALL KABUPATEN
    Route::get('kabupatens', 'KabupatenController@index');

    //GET ALL CATEGORY WISATA
    Route::get('categoryWisatas', 'CategoryWisataController@index');

    //ADD DESTINATION
    Route::post('destinasi', 'DestinasiController@store');
});
