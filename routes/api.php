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
Route::prefix('institutes')->group(function(){
    Route::get('fetch_all','InstituteController@fetch_all');
    Route::get('notificantion/get_details/{notificationID}','InstituteController@get_notification');
});

Route::prefix('subscription')->group(function () {
    Route::post('update', 'SubscriptionController@_subscription');
});
