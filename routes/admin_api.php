<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::prefix('admin/job')->group(function(){
    Route::post('create','JobController@create_job');
});