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
// Auth for User
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Auth for Admin
Route::get('/admin', 'AdminController@index');