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
Route::get('/', function(){
  return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/faqs', 'FaqsController@index')->name('faqs');

Route::get('/products', 'ProductsController@show')->name('products');

Route::get('/products/agregar', 'ProductsController@create');

Route::post('/products/agregar', 'ProductsController@store');
