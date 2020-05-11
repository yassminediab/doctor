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

Route::get('/', function () {
    return view('index');
});

Route::get('send/appoinment', 'AppoinmentController@store');
Route::get('get/time','AppoinmentController@getTime');

//ADMIN
Route::get('admin','Admin/AppoinmentController@addScdule');
Route::get('admin',function(){
   return view('admin.index');
});
Route::resource('admin/settings','Admin\SettingController');

