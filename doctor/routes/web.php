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

Route::post('send/appoinment', 'AppoinmentController@store');
Route::get('get/time','AppoinmentController@getTime');

//ADMIN
Route::get('admin','Admin/AppoinmentController@addScdule');
Route::get('admin',function(){
   return view('admin.index');
});
Route::resource('admin/settings','Admin\SettingController');
Route::get('admin/appointments', 'Admin\AppoinmentController@index');
Route::get('admin/appointments/cancel', 'Admin\AppoinmentController@CanceledAppointment');
Route::get('admin/appointments/done', 'Admin\AppoinmentController@DoneAppointment');
Route::get('admin/appointments/cancel/{id}', 'Admin\AppoinmentController@DoCancelAppointments');
Route::get('admin/appointments/approve/{id}', 'Admin\AppoinmentController@DoApproveppointments');
Route::get('admin/appointments/{id}/edit', 'Admin\AppoinmentController@edit');
Route::post('admin/appointments/store/{id}', 'Admin\AppoinmentController@store');
Route::resource('admin/blogs','Admin\BlogsController');
Route::get('admin/blogs/delete/{id}', 'Admin\BlogsController@delete');
Route::post('admin/blogs/update/{id}', 'Admin\BlogsController@update');

