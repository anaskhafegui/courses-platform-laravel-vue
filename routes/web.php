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

Route::get('/logout', function() { auth()->logout(); return redirect('/'); });
Route::get('register/confirm', 'ConfirmEmailController@index')->name('confirm-email');

Route::prefix('admin')->group(function() {
    Route::resource('series','SeriesController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
