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

Route::get('login', 'Auth\Logincontroller@showLoginForm')->name('login');
Route::get('login', 'Auth\Logincontroller@login')->name('login.post');
Route::get('logout', 'Auth\Logincontroller@logout')->name('logout');

