<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseFourController extends Controller
{
    function getView(){
        return view('E4.exercise4');
    }
    function sendInfo(Request $request){
        return view('E4.results4', ['number' => $request->get('number')]);
    }
}
