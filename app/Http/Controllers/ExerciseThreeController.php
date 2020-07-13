<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseThreeController extends Controller
{
    function getView()
    {
        return view('E3.exercise3');
    }

    function sendInfo(Request $request)
    {
        return view('E3.results3', ['number' => $request->get('number')]);
    }
}
