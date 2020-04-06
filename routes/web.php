<?php

use Illuminate\Support\Facades\Route;

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

  
Route::view('/contact', 'contact');
Route::post('/contactController','contactController@formSubmit');
Route::view('/contactMsg', 'contactMsg');


Route::group(['middleware' => ['auth']], function () {
    Route::view('/checkout', 'checkout');
    Route::view('/detail', 'detail');
    Route::get('/order', function(){ return view('order');});
    Route::post('/order', 'OrderController@create');
    Route::delete('/order/{orderId}', 'OrderController@delete');
    
});



Route::get('/product', 'ProductController@index')->name('product');
Route::get('/cart', 'CartController@index')->name('cart');
