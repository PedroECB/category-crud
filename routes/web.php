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


Route::get('/', 'CategoriaController@index')->name('home');


Route::get('/create', 'CategoriaController@create')->name('create');


Route::post('/create', 'CategoriaController@storage')->name('storage');

Route::get('/categorias/{id}','CategoriaController@showw')->name('show');

Route::get('/categorias/{id}/edit','CategoriaController@edit')->name('edit');

Route::put('/categorias/{id}','CategoriaController@update')->name('update');

Route::delete('categorias/{id}', 'CategoriaController@destroy')->name('destroy');