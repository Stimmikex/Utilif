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
Route::get('utivist', 'storePagesController@utivist')->name('utivist');

Route::get('sund', 'storePagesController@utivist')->name('sund');

Route::get('skor', 'storePagesController@utivist')->name('skor');

Route::get('ithrottir', 'storePagesController@utivist')->name('ithrottir');

Route::get('skidi', 'storePagesController@utivist')->name('skidi');

Route::get('tilbod', 'storePagesController@utivist')->name('tilbod');

// Route::get('Sund', function() {
//     return view('storePages/sund');
// });

// Route::get('Skór', function() {
//     return view('storePages/skor');
// });

// Route::get('Íþróttarfatnaður', function() {
//     return view('storePages/ithrottir');
// });

// Route::get('Skíðavörur', function() {
//     return view('storePages/skidi');
// });

// Route::get('Tilboðsvörur', function() {
//     return view('storePages/tilbod');
// });

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
