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

Route::get('/','HomeController@show');
Route::get('/album','HomeController@showAlbum');
Route::get('/order','OrderController@show');
Route::post('/images-upload', 'AlbumController@imagesUploadPost')->name('images.upload');
