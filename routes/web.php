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

use App\Booking;
use App\Events\ConfirmBookingEvent;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/send/{user}', function (User $user) {
    $booking = Booking::create(['user_id' => $user->id]);

    event(new ConfirmBookingEvent($booking));
});
