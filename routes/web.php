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
Auth::routes(['verify' => true]);
Route::get('/mobile_reg','PageController@show_mobile_reg')->name('mobile_reg');
Route::get('/e_meet','PageController@show_e_meet')->name('e_meet')->middleware('auth','verified');
Route::get('/newsfeed','PageController@show_newsfeed')->name('newsfeed')->middleware('auth');
Route::get('/institute','PageController@show_institute')->name('institute')->middleware('auth');
Route::get('/language','PageController@show_language')->name('language')->middleware('auth');
Route::get('/rateus','PageController@show_rateus')->name('rateus')->middleware('auth');
Route::get('/', function () {return view('home');})->name('home');
Route::get('/admin_dashboard','PageController@show_admin_dashboard')->name('admin_dashboard')->middleware('auth'); //for logged in admins of institutes
Route::get('/dashboard','PageController@show_dashboard')->name('dashboard')->middleware('auth'); //for logged in users
Route::get('/profile','PageController@show_profile')->name('profile')->middleware('auth');