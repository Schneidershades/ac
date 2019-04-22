<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/profile', 'User\ProfileController');
Route::get('/events', 'HomeController@index')->name('events');
Route::resource('/advert', 'User\AdvertController');
Route::resource('/wallet', 'User\WalletController');
Route::resource('/package', 'User\BuyPackageController');
