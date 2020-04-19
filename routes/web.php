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
Route::post('/imagesupload', 'AlbumController@imagesUploadPost');
Route::post('/bookupload', 'AlbumController@bookUploadPost');
Route::get('/checkout/view/{id}','CheckOutController@show');
Route::get('/checkout/view/ajax_quan_huyen/{id_tinh_tp}','CheckOutController@getQuanHuyen');
Route::get('/checkout/view/ajax_xa_phuong/{id_quan_huyen}','CheckOutController@getXaPhuong');
Route::get('/orderSuccess/view/{id}','OrderSuccessController@show');
Route::post('/checkout/update', 'CheckOutController@update');


//admin
Route::get('/showadmin','AdminController@checkLogin');
Route::get('/showviewadmin','AdminController@show');
Route::get('/showadmin/logout','AdminController@LogOut');
Route::post('/showadmin/loginadmin','AdminController@LoginAuth');
Route::get('/quantri','AdminController@showLogin');
Route::get('/quantri/order','AdminOrderController@show');
Route::get('/quantri/order/updateview/{id}','AdminOrderController@showUpdateView');
Route::post('/quantri/order/update', 'AdminOrderController@update');

