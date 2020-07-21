<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //
    public function show_survey_page(){
        return view('pages.survey');
    }

    public function save_answers(Request $request){
        //$newSurvey= new Survey;
        dd($request->all());
    }
}
