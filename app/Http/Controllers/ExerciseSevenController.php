<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseSevenController extends Controller
{
    function getView()
    {
        return view('E7.exercise7');
    }
    function sendInfo(Request $request)
    {
        $myBooks = ['The Adventures of Sherlock Holmes', 'Dracula', 'The knight in the rusty armor', 'The 7 habits of highly effective people', 'Spider-man comic', 'The Batman Book', 'Harry Potter'];
        $wantedBooks = $request->get('number');
        $booksToNotRead = [];
        $booksToRead = [];

        for ($i = 0; $i < $wantedBooks; $i++) {
            $rb = mt_rand(0, (count($myBooks) - 1));
            $booksToRead[] = $myBooks[$rb];
            unset($myBooks[$rb]);
            if ($i == $wantedBooks - 1) {
                foreach ($myBooks as $leftBooks) {
                    $booksToNotRead[] = $leftBooks;
                }
            }
        }

        return view(
            'E7.results7',
            [
                'myBooks' => $myBooks,
                'booksToNotRead' => $booksToNotRead,
                'rb' => $rb,
                'wantedBooks' => $wantedBooks,
                'booksToRead' => $booksToRead
            ]
        );
    }
}
