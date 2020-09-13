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
// Supplier Details form Route
Route::get('/generaluser/supplierinput', 'GeneralUserController@input_supplier')->name('input_supplier');
// Post Supplier details form to db Route
Route::post('/generaluser/supplierinput/create', 'GeneralUserController@push_to_form')->name('input_supplier.create');

Route::get('/generaluser/donorinput', 'GeneralUserController@input_donor')->name('input_donor');
Route::post('/generaluser/donorinput/create', 'GeneralUserController@push_form')->name('input_donor.create');

//Donations details from route
Route::get('/generaluser/donationsinput', 'GeneralUserController@input_donations')->name('input_donations');
Route::post('/generaluser/donationsinput/create', 'GeneralUserController@push_towards_form')->name('input_donations.create');