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

Route::get('/clients', 'ClientsController@list')->name('clients');
Route::get('/clients/add', 'ClientsController@add')->name('clients.add');
Route::post('/clients/save', 'ClientsController@save')->name('clients.save');
Route::get('/clients/edit', 'ClientsController@edit')->name('clients.edit');
Route::post('/clients/update', 'ClientsController@update')->name('clients.update');
Route::get('/clients/delete', 'ClientsController@delete')->name('clients.delete');
