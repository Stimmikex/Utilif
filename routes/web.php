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

Route::get('Repair', 'ItemController@repair')->name('Repair');

Route::get('Skis', 'ItemController@skis')->name('Skis');

Route::get('Outdoor', 'ItemController@outdoors')->name('Outdoor');

Route::get('Bikes', 'ItemController@bikes')->name('Bikes');

//Route::get('footer', 'openHController');

/*
-------------------------------------------------
inc => PATH
-------------------------------------------------
*/

// Route::get('header', function() {
//     return view('inc/header');
// });

Route::get('Skis/{item}', 'ItemController@skis')->name('Skis/Item');

/*
-------------------------------------------------
/ => PATH
-------------------------------------------------
*/
Route::get('/', 'ItemController@index')->name('Welcome');

Auth::routes();

Route::get('/home', 'ItemController@index')->name('Welcome Back');
