<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseTwoController extends Controller
{
    function getView()
    {
        return view('E2.exercise2');
    }

    function sendInfo(Request $request)
    {
        
        $wordArray = str_split($request->get('word'));
        $lowerWord = array_map('strtoupper', $wordArray);
        $wordLenght = count($wordArray);

        return view('E2.results2', [
            'wordArray' => $wordArray,
            'lowerWord' => $lowerWord,
            'wordLenght' => $wordLenght
        ]);
    }
}
