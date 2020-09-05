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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('paypall', function () {
//     return view('paypall');
// });

Route::get('/','PaypalController@index')->name('/');
Route::post('paypal','PaypalController@paywithpaypal')->name('paypal');
Route::get('status','PaypalController@getPaymentStatus')->name('status');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard/{type}','HomeController@dashboard')->name('dashboard');
    Route::get('useredit/{id}','CustomerController@edit')->name('useredit');
    Route::post('updateuser/{id}','CustomerController@update')->name('updateuser');
    Route::get('allcustomer','CustomerController@allcustomer')->name('allcustomer');
    
});