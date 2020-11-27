<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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


Route::group(['prefix' => 'command'], function () {
    Route::get('/migrate', function () {
        Artisan::call('migrate');
        dd('done');
    });

    Route::get('/seed', function () {
        Artisan::call('db:seed');
        dd('done');
    });
    Route::get('/storage', function () {
        Artisan::call('storage:link');
        dd('done');
    });
    Route::get('/clear', function () {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
    });
});
Auth::routes(['verify' => true]);
Route::get('/', function () {return view('landing');})->name('home');
Route::get('/profile','PageController@show_profile')->name('profile')->middleware('auth');

Route::get('/mobile_reg','PageController@show_mobile_reg')->name('mobile_reg');
Route::get('/e_meet','PageController@show_e_meet')->name('e_meet')->middleware('auth','verified');
Route::get('/newsfeed','PageController@show_newsfeed')->name('newsfeed')->middleware('auth');
Route::get('/institute','PageController@show_institute')->name('institute')->middleware('auth');
Route::get('/language','PageController@show_language')->name('language')->middleware('auth');
Route::get('/rateus','PageController@show_rateus')->name('rateus')->middleware('auth');

Route::get('/notification','PageController@show_notification')->name('notification')->middleware('auth');
Route::get('/single_news','PageController@show_single_news')->name('single_news')->middleware('auth');
Route::get('/attendance',function(){return view('pages.attendance');})->name('attendance')->middleware('auth');
Route::get('/dashboard',function(){return view('pages.dashboard');})->name('dashboard')->middleware('auth');

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

Route::prefix('survey')->group(function(){
    Route::get('ques','PageController@show_survey')->name('show_survey');
    Route::post('save','SurveyController@save_answers')->name('save_survey');
});
Route::get('/test','PageController@show_boiler');