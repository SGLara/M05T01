<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseSixController extends Controller
{
    function getView(){
        return view('E6.exercise6');
    }
    function sendInfo(Request $request){
        return view('E6.results6', ['prime' => $request->get('number')]);
    }
}
