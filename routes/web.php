<?php
Auth::routes();

Route::get('/', 'PageController@index')->name('welcome');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@contactStore')->name('contact.store');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/conference/about', 'PageController@conference')->name('conference.about');
Route::post('/conference/registration/process', 'PageController@saveConference')->name('conference.register');
Route::get('/conference/registration/receipt/{id}', 'PageController@conferenceReciept')->name('conference.register.receipt');


Route::get('/news/round-table', 'PageController@roundTable')->name('round.table');

Route::resource('/profile', 'User\ProfileController');
Route::post('/profile/{id}', 'User\ProfileController@save')->name('profile.update');
Route::get('/profile/edit/{id}', 'User\ProfileController@edit')->name('profile.edit');

Route::get('/events', 'HomeController@index')->name('events');

Route::get('listing/create', 'User\AdvertController@create')->name('listings.create.start');
Route::get('listing/{listing}/create', 'User\AdvertController@create')->name('listings.create');
Route::resource('/listings', 'User\AdvertController');

Route::resource('/user-event-packages', 'User\EventPackageController');

Route::post('/{advert}/upload', 'User\UploadController@store')->name('upload.store');
Route::get('/{advert}/upload/{upload}', 'User\UploadController@destroy')->name('upload.destroy');
Route::get('/storage/{photo}', 'User\UploadController@getPhoto')->name('uploaded.image');

Route::resource('/wallet', 'User\WalletController');
Route::resource('/package', 'User\BuyPackageController');

Route::post('/pay', 'User\RaveController@initialize')->name('pay');
Route::post('/rave/callback', 'User\RaveController@callback')->name('callback');


Route::resource('/admin-events', 'Admin\EventController');
Route::resource('/admin-users', 'Admin\UsersController');
Route::resource('/admin-business-categories', 'Admin\CategoryController');
Route::resource('/admin-posts', 'Admin\PostController');
Route::resource('/admin-tags', 'Admin\PostController');
Route::resource('/admin-adverts', 'Admin\AdvertController');
Route::resource('/admin-settings', 'Admin\SettingsController');
Route::resource('/admin-payments', 'Admin\PaymentController');
Route::resource('/admin-transaction', 'Admin\TransactionController');