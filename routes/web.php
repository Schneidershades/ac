<?php
Auth::routes();

Route::get('/', 'PageController@index')->name('welcome');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@contactStore')->name('contact.store');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/profile', 'User\ProfileController');
Route::get('/events', 'HomeController@index')->name('events');
Route::resource('/advert', 'User\AdvertController');
Route::resource('/wallet', 'User\WalletController');
Route::resource('/package', 'User\BuyPackageController');

Route::post('/pay', 'User\RaveController@initialize')->name('pay');
Route::post('/rave/callback', 'User\RaveController@callback')->name('callback');
