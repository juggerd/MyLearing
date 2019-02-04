<?php

use App\Client;


Route::get('/', function () {
// dd($clients);
    return view('pages.welcome');
});

Route::get('/list', 'ClientController@list') -> name('client.list');
Route::get('/add', 'ClientController@add') -> name('client.add');
Route::get('/del', 'ClientController@del') -> name('client.del');
Route::get('/edit', 'ClientController@edit') -> name('client.edit');

Route::post('/create', 'ClientController@create') -> name('client.create');
Route::post('/update', 'ClientController@update') -> name('client.update');


