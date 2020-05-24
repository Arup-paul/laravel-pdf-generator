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


Route::get('/', 'DisneyplusController@create');
Route::get('disneyplus/list', 'DisneyplusController@index')->name('disneyplus.index');
Route::post('disneyplus/store', 'DisneyplusController@store')->name('disneyplus.store');
Route::get('/downloadPDF/{id}','DisneyplusController@downloadPDF');


