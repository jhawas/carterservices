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

/*******
*
*	User Route
*
********/

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('signup', 'HomeController@signup')->name('signup');

Route::get('register/{user_type}', 'Auth\RegisterController@showRegistrationForm2')->name('register_type');

Route::get('profile', 'ProfileController@index')->name('profile');

/*******
*
*	Client Route
*
********/





/*******
*
*	Technician Route
*
********/





/*******
*
*	Admin Route
*
********/

