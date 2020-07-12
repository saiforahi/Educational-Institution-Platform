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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login','AuthController@login')->name('api_login');
Route::get('logout','AuthController@logout')->name('api_logout')->middleware('auth:sanctum');
Route::post('register','AuthController@register')->name('api_register');

Route::middleware('auth:sanctum')->prefix('subscription')->group(function () {
    Route::post('update','SubscriptionController@_subscription');
    Route::get('check/{institute_id}','SubscriptionController@_check');
});
Route::middleware('auth:sanctum')->prefix('institute')->group(function(){
    Route::get('list/{type}','InstituteController@api_get_institute_list');
    Route::get('details/{id}','InstituteController@api_get_details');
});
Route::middleware('auth:sanctum')->prefix('notification')->group(function(){
    Route::get('list/{institute_id}','NotiController@api_get_notifications');
    Route::get('details/{notification_id}','NotiController@api_get_details');
});

