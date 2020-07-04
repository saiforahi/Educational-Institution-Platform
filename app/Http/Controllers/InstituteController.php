<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsNotification;

class InstituteController extends Controller
{
    public function fetch_all(){
        return Institute::all();
    }

    public function get_notification($notificationID){
        return InsNotification::find($notificationID);
    }
}
