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
    $trip = App\Model\Trip::find(1);
    return view('home', compact('trip'));
});

Route::get('/order_summary', function() {
    return view('emails.orders.order_summary');
});


Route::get('/explore', 'HomeController@explore')->name('explore');
Route::post('/trip', 'TripController@searchTrip')->name('search_trip');

Route::post('/place_order/{trip}', 'TransactionController@storeTransaction')->name('send_email');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/featured-trips', 'HomeController@featured')->name('featured');
Route::get('/resources', 'HomeController@resources')->name('resources');
