<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseOneController extends Controller
{
    function getView()
    {
        return view('E1.exercise1');
    }

    function sendInfo(Request $request)
    {
        $answer = [];
        for ($i = $request->get('age'); $i >= 0; $i--) {
            $answer[] = "$i años";
        }
        return view('E1.results1', ['data' => $answer]);
    }
}
