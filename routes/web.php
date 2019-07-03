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
//Frontend
Route::get('/', 'HomeController@index');
Route::get('/shop', 'HomeController@shop');




//Backend
Route::get('/admin', 'DashboardController@index');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/customer', 'CustomerController');



