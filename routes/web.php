<?php

use App\Client;


Route::get('/', function () {

    return view('pages.welcome');
});

Route::get('client/list', 'ClientController@list') -> name('client.list');
Route::get('/add', 'ClientController@add') -> name('client.add');
Route::get('/del', 'ClientController@del') -> name('client.del');
Route::get('/edit', 'ClientController@edit') -> name('client.edit');
Route::post('/create', 'ClientController@create') -> name('client.create');
Route::post('/update', 'ClientController@update') -> name('client.update');


Route::get('/reestrs', 'ReestrController@list') -> name('reestr.list');
Route::post('reestr/create', 'ReestrController@create') -> name('reestr.create');
Route::get('/reestrs/add', 'ReestrController@add') -> name('reestr.add');
Route::get('reestr/create', 'ReestrController@create') -> name('reestr.create');