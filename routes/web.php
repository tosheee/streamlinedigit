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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



Route::get ('/admin/dashboard', 'AdminController@index');
Route::get ('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
