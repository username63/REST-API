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

Route::get('knigi_show', 'KnigiController@show');
Route::get('knigi_delete/{id}', 'KnigiController@destroy');
Route::get('knigi_create', 'KnigiController@create');
Route::post('knigi_submit', 'KnigiController@store');
Route::get('knigi_edit/{id}', 'KnigiController@edit');
Route::post('knigi_update/{id}', 'KnigiController@update')->name('knigi.update');
