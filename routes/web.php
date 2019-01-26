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
use App\Client;
Route::get('/', function () {
  $clients=Client::all();
//  dd($clients);
    return view('welcome',['clients_my'=>$clients]);
});
