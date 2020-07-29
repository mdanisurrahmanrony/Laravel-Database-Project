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

Route::get('/', 'HomeController@Home');

Route::get('/admin', 'testing@index');

Route::post('/store', 'testing@store');

Route::get('/customer', 'CustomerController@Customer');

Route::get('/productdetails', 'ProductDetailsController@product');

Route::get('/productdetails', 'ProductDetailsController@productshow');

Route::post('/search', 'SearchController@search');