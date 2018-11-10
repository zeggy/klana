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
    return view('home');
});


Route::get('/explore', 'HomeController@explore')->name('explore');
Route::post('/{keywords}', 'TripController@searchTrip')->name('search_trip');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/featured-trips', 'HomeController@featured')->name('featured');
Route::get('/resources', 'HomeController@resources')->name('resources');
