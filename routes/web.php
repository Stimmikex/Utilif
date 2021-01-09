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

Route::get('Skis/{category}', 'ItemController@category');

Route::get('Bikes/{category}', 'ItemController@category');

Route::get('search/{itemName}', 'ItemController@findItem');


/*
-------------------------------------------------
/ => PATH
-------------------------------------------------
*/
Route::get('/', 'ItemController@index')->name('Welcome');

Route::get('/welcome', 'HomeController@welcome')->name('Welcome2');

Auth::routes();

Route::get('/Product/{item}', 'ItemController@item');

Route::get('/home', 'ItemController@index')->name('Welcome Back');

Route::post('stripe-payment', 'PaymentController@store')->name('stripe.store');

/*
-------------------------------------------------
/ => Cart
-------------------------------------------------
*/
Route::get('/cart', 'ProductsController@cart')->name('cart');

Route::get('add-to-cart/{id}', 'ProductsController@addToCart');

Route::patch('update-cart', 'ProductsController@update');

Route::delete('remove-from-cart', 'ProductsController@remove');