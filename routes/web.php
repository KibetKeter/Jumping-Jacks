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
                                                        // GENERAL USER ROUTES

// 1)  Supplier Details form Route
Route::get('/generaluser/supplierinput', 'GeneralUserController@input_supplier')->name('input_supplier');
// 2)  Post Supplier details form to db Route
Route::post('/generaluser/supplierinput/create', 'GeneralUserController@push_to_form')->name('input_supplier.create');
// 3) Donor Details from route
Route::get('/generaluser/donorinput', 'GeneralUserController@input_donor')->name('input_donor');
// 4)  Post Donor Details form to db route
Route::post('/generaluser/donorinput/create', 'GeneralUserController@push_form')->name('input_donor.create');
// ADMIN ROUTES
// 1) Admin Details form Route
Route::get('/admin/supplierinput', 'AdminController@input_supplier')->name('admin_input_supplier');
// 2) Post Supplier details form to db Route
Route::post('/admin/supplierinput/create', 'AdminController@push_to_form')->name('admin_input_supplier.create');
// 3) Donor Details from route
Route::get('/admin/donorinput', 'AdminController@input_donor')->name('input_donor');
// 4)  Post Donor Details form to db route
Route::post('/admin/donorinput/create', 'AdminController@push_form')->name('input_donor.create');

//Donations details from route
Route::get('/generaluser/donationsinput', 'GeneralUserController@input_donations')->name('input_donations');
Route::post('/generaluser/donationsinput/create', 'GeneralUserController@push_towards_form')->name('input_donations.create');
