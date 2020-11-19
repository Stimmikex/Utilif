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
/*
-------------------------------------------------
storePages => PATH
-------------------------------------------------
*/
//Route::get('utivist', 'storePagesController@utivist')->name('utivist');

Route::get('utivist', 'ItemController')->name('utivist');

Route::get('sund', 'storePagesController@sund')->name('sund');

Route::get('skor', 'storePagesController@skor')->name('skor');

Route::get('ithrottir', 'storePagesController@ithrottir')->name('ithrottir');

Route::get('skidi', 'storePagesController@skidi')->name('skidi');

Route::get('tilbod', 'storePagesController@tilbod')->name('tilbod');

//Route::get('footer', 'openHController');

/*
-------------------------------------------------
inc => PATH
-------------------------------------------------
*/
Route::resource('footer', 'openHController@store');

// Route::get('header', function() {
//     return view('inc/header');
// });

/*
-------------------------------------------------
/ => PATH
-------------------------------------------------
*/
Route::get('/', 'HomeController@welcome')->name('Welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
