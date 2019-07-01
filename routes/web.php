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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', 'AuthOController@login')->name('login');
Route::post('/login_post', 'AuthOController@loginPost')->name('login_post');
Route::get('/logout', 'AuthOController@logout')->name('logout');
Route::get('/dashboard', 'DashboardController@show')->name('dashboard')->middleware('auth');
//Route::get('/dashboard/add_user', 'UserController@addUser')->name('add_user');




