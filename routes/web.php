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

Route::get('/administrator', 'AdminController@index')->name('admin.home');
Route::resource('/user', 'AdminUserResource');
//Route::resource('/admin/user', 'AdminUserResource');
//Route::get('/administrator/profile', 'AdminController@profile')->name('admin.profile');
//Route:: post('/psignup', 'AdminController@processSignup')->name('admin.signup');
