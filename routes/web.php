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

Route::post('/events', 'EventController@store');

Route::get('/events', 'EventController@index')->name('events');
Route::post('/events/{event}', 'EventController@update');

Route::get('/users', 'UsersController@index')->name('users');

