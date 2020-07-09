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
//home
Route::get('/', 'ProductMenuController@home');

Auth::routes();

//read
Route::get('/products/productList', 'ProductMenuController@productList');

//create
Route::get('/products/create', 'ProductMenuController@create');
Route::post('/products', 'ProductMenuController@store');


//delete
Route::post('/products/{id}/delete', 'ProductMenuController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutUs', 'GeneralController@about')->name('aboutUs');
Route::get('/menu', 'GeneralController@menu')->name('menu');
Route::get('/form', 'GeneralController@form')->name('form');


//update 
Route::get('/products/{id}/change', 'ProductMenuController@change');
Route::post('/products/{id}/change', 'ProductMenuController@update');