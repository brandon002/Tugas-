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

// Route::get('/', function () {
//     return view('welcome');
// });

Route :: view('/register', "register");
Route :: view('/login', "login");
Route :: post('/store2', "UzerController@store2");
Route :: post('/logs', "UzerController@logs");
Route :: get('/', "ItemController@index");
Route :: get('/edit/{id}', "ItemController@edit");
Route :: get('/show/{id}', "ItemController@show");
Route :: get('/create', "ItemController@create");
Route :: post('/store', "ItemController@store");
Route :: post('/update/{id}', "ItemController@update");
Route :: post('/delete/{id}', "ItemController@destroy");