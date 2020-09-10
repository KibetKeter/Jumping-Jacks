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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/generaluser', 'GeneralUserController@index')->name('generaluser.dashboard');

Route::get('/generaluser/supplier', 'SupplierController@index')->name('generaluser.dashboard');
Route::get('/generaluser/supplier/create', 'SupplierController@index')->name('generaluser.dashboard');


Route::get('/generaluser/donor', 'DonorAccountsController@index')->name('generaluser.dashboard');
Route::get('/generaluserdonor/create', 'DonorAccountsController@index')->name('generaluser.dashboard');
