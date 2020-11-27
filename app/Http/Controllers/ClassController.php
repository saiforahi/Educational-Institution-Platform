<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    //
    public function show(){
        return view('pages.class_management.show_classes');
    }
}
