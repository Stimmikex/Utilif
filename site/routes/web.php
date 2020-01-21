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
// Route::get('utivist', 'storePagesController@utivist')->name('utivist');
Route::get('utivist', 'BrandController@list')->name('utivist');

Route::get('sund', 'storePagesController@sund')->name('sund');

Route::get('skor', 'storePagesController@skor')->name('skor');

Route::get('ithrottir', 'storePagesController@ithrottir')->name('ithrottir');

Route::get('skidi', 'storePagesController@skidi')->name('skidi');

Route::get('tilbod', 'storePagesController@tilbod')->name('tilbod');

//Route::get('footer', 'openHController@store');
//Route::get('{any}', 'BaseController@__construct')->where('any', '.*');

/*
-------------------------------------------------
inc => PATH
-------------------------------------------------
*/
Route::get('footer', function() {
    return view('inc/footer');
});

Route::get('header', function() {
    return view('inc/header');
});

/*
-------------------------------------------------
/ => PATH
-------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
