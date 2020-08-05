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
    return view('items.table');
});
Route::get('/home','homeController@home');
Route::get('/auth','authController@auth');
Route::post('selamat-datang','authController@selamat_datang');
Route::get('/master',function(){
	return view('adminlte.master');
});
Route::get('/data-table',function(){
	return view('items.datatables');
});




