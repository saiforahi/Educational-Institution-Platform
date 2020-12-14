<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('auth:api')->get('/user','AuthController@get_user_details');
Route::post('login','AuthController@login')->name('api_login');
Route::post('logout','AuthController@logout')->name('api_logout')->middleware('auth:api');
Route::post('register','AuthController@register')->name('api_register');

Route::middleware('auth:api')->prefix('subscription')->group(function () {
    Route::post('update','SubscriptionController@_subscription');
    Route::get('check/{institute_id}','SubscriptionController@_check');
    Route::get('list','SubscriptionController@_list');
});
Route::middleware('auth:api')->prefix('institute')->group(function(){
    Route::get('list/{type}','InstituteController@api_get_institute_list');
    Route::get('details/{id}','InstituteController@api_get_details');
});
Route::middleware('auth:api')->prefix('notification')->group(function(){
    Route::get('list/{institute_id}','NotiController@api_get_notifications');
    Route::get('details/{notification_id}','NotiController@api_get_details');
});
Route::middleware('auth:api')->prefix('notices')->group(function(){
    Route::get('fetch','NoticeController@_notices');
});
Route::middleware('auth:api')->prefix('news')->group(function(){
    Route::post('create','NewsController@_create_news');
    Route::get('fetchall','NewsController@_get_all_news');
    Route::get('{id},NewsController@_get');
});
Route::middleware('auth:api','verified')->prefix('notifications')->group(function(){
    Route::get('{id}','NotificationController@_get');
    Route::get('grouped/get','NotificationController@_grouped_notifications');
});
//Route::get('email/verify/{id}', 'VerificationController@verify')->middleware('auth:api');
Route::get('email/resend', 'VerificationController@resend')->middleware('auth:api');

Route::get('districts','PageController@_getDistricts');
Route::get('{district_id}/sub_districts','PageController@_getSubDistricts');
Route::get('all_institutes','InstituteController@fetch_all');

Route::post('job/application/submit','JobController@submit_job_application');
