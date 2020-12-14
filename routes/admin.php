<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::prefix('institute/admin/manageClasses')->middleware('auth')->group(function(){
    Route::get('view','ClassController@show')->name('show_classes');
    Route::post('add','ClassController@add')->name('add_class');
});
