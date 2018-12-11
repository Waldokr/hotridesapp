<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');
    
    
Route::resource('events','EventController');

Route::post('/events/create', 'EventController@create')->middleware('is_admin');

Route::post('/events', 'EventController@store');

Route::get('/events', 'EventController@index')->name('events');

Route::post('/events/{event}', 'EventController@update');



Route::resource('vehicles','VehicleController');

Route::post('/vehicles/create', 'VehicleController@create');

Route::post('/vehicles', 'VehicleController@store');

Route::get('/vehicles', 'VehicleController@index')->name('vehicles');

Route::post('/vehicles/{vehicle}', 'VehicleController@update');


Route::resource('payments','PaymentController');

Route::post('/payments', 'PaymentController@store');

Route::get('/payments', 'PaymentController@index')->name('payments');

Route::post('/payments/{payment}', 'PaymentController@update');


Route::resource('clubs','ClubController');

Route::post('/clubs', 'ClubController@store');

Route::get('/clubs', 'ClubController@index')->name('clubs');

Route::post('/clubs/{club}', 'ClubController@update');


Route::resource('donations','DonationController');

Route::post('/donations', 'DonationController@store');

Route::get('/donations', 'DonationController@index')->name('donations');

Route::post('/donations/{donation}', 'DonationController@update');


Route::resource('sponsors','SponsorController');

Route::post('sponsors/create','SponsorController@create')->middleware('is_admin');

Route::post('/sponsors', 'SponsorController@store');

Route::post('/sponsors/{sponsor}/edit', 'SponsorController@edit');

Route::get('/sponsors', 'SponsorController@index')->name('sponsors');

Route::post('/sponsors/{sponsor}', 'SponsorController@update');


Route::resource('registrations','RegistrationController');

Route::post('/registrations/create', 'RegistrationController@create');

Route::post('/registrations', 'RegistrationController@store');

Route::get('/registrations', 'RegistrationController@index')->name('registrations');

Route::post('/registrations/{registration}', 'RegistrationController@update');


Route::get('/users', 'UserController@index')->name('users');

Route::get('/financial', 'FinancialController@index') ->middleware('is_admin') ->name('financial');
                                                                                                                        