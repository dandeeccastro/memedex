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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meme','MemeController@index');
Route::get('/meme/{id}','MemeController@show');
Route::post('/meme','MemeController@store');
Route::put('meme/{id}','MemeController@update');
Route::delete('/meme/{id}','MemeController@destroy');
