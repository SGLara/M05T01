<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseEightController extends Controller
{
    function getView()
    {
        return view('E8.exercise8');
    }

    function sendInfo(Request $request)
    {
        return view('E8.results8', [
            'start' => $request->get('year1'),
            'end' => $request->get('year2')
        ]);
    }
}
