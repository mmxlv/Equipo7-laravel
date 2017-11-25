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

Route::get('/products/add', 'ProductsController@add')->name('addproducts');

Route::post('/products/add', 'ProductsController@store')->name('addproducts');

Route::get('/product/{id}/edit', 'ProductsController@edit')->name('editproduct');

Route::patch('/product/{id}', 'ProductsController@update')->name('editproduct');

Route::delete('/product/{id}', 'ProductsController@destroy')->name('deleteproducts');

Route::get('/product/{id}', 'ProductsController@info')->name('productinfo');
