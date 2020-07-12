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

Route::get('/corporate','PageController@show_corporate')->name('corporate')->middleware('auth');
Route::get('/diploma','PageController@show_diploma')->name('diploma')->middleware('auth');
Route::get('/govt','PageController@show_govt')->name('govt')->middleware('auth');
Route::get('/national','PageController@show_national')->name('national')->middleware('auth');
Route::get('/private','PageController@show_private')->name('private')->middleware('auth');
Route::get('/notification','PageController@show_notification')->name('notification')->middleware('auth');
Route::get('/single_news','PageController@show_single_news')->name('single_news')->middleware('auth');

Route::get('/', function () {return view('landing');})->name('home');
Route::get('/admin_dashboard','PageController@show_admin_dashboard')->name('admin_dashboard')->middleware('auth'); //for logged in admins of institutes
Route::get('/dashboard','PageController@show_dashboard')->name('dashboard')->middleware('auth'); //for logged in users
Route::get('/profile','PageController@show_profile')->name('profile')->middleware('auth');

Route::middleware('auth')->prefix('institute')->group(function () {
    Route::get('list/{type}', 'InstituteController@get_institute_list')->name('show_institutes');
    Route::get('details/{id}','InstituteController@get_details')->name('institute_details');
});
Route::middleware('auth')->prefix('subscription')->group(function () {
    Route::post('update', 'SubscriptionController@web_subscription')->name('update_subscription');
    Route::get('list', 'SubscriptionController@web_subscription_list')->name('subscribed_institutes');
});
Route::middleware('auth')->prefix('notification')->group(function(){
    Route::get('details/{notification_id}','PageController@show_notification_details')->name('notification_details');
});
Route::get('landingSlider',function(){return view('layouts.slider');})->name('landing_slider');
