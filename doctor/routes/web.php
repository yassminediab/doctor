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
Auth::routes();
Route::get('/', function () {
    return view('index');
});

Route::post('send/appoinment', 'AppoinmentController@store');
Route::get('get/time','AppoinmentController@getTime');

//ADMIN

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/',function(){
        return view('admin.index');
    });
    Route::resource('settings','Admin\SettingController');
    Route::get('appointments', 'Admin\AppoinmentController@index');
    Route::get('appointments/cancel', 'Admin\AppoinmentController@CanceledAppointment');
    Route::get('appointments/done', 'Admin\AppoinmentController@DoneAppointment');
    Route::get('appointments/cancel/{id}', 'Admin\AppoinmentController@DoCancelAppointments');
    Route::get('appointments/approve/{id}', 'Admin\AppoinmentController@DoApproveppointments');
    Route::get('appointments/{id}/edit', 'Admin\AppoinmentController@edit');
    Route::post('appointments/store/{id}', 'Admin\AppoinmentController@store');
    Route::resource('blogs','Admin\BlogsController');
    Route::get('blogs/delete/{id}', 'Admin\BlogsController@delete');
    Route::post('blogs/update/{id}', 'Admin\BlogsController@update');
});

