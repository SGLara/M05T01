<?php

use Illuminate\Support\Facades\Route;

Route::get('/exercise1','ExerciseOneController@getView')->name('exercise1');
Route::post('/results1','ExerciseOneController@sendInfo')->name('results1');

Route::get('/exercise2','ExerciseTwoController@getView')->name('exercise2');
Route::post('/results2','ExerciseTwoController@sendInfo')->name('results2');

Route::get('/exercise3','ExerciseThreeController@getView')->name('exercise3');
Route::post('/results3','ExerciseThreeController@sendInfo')->name('results3');

Route::get('/exercise4','ExerciseFourController@getView')->name('exercise4');
Route::post('/results4','ExerciseFourController@sendInfo')->name('results4');

Route::get('/exercise5','ExerciseFiveController@getView')->name('exercise5');
Route::post('/results5','ExerciseFiveController@sendInfo')->name('results5');

Route::get('/exercise6','ExerciseSixController@getView')->name('exercise6');
Route::post('/results6','ExerciseSixController@sendInfo')->name('results6');

Route::get('/exercise7','ExerciseSevenController@getView')->name('exercise7');
Route::post('/results7','ExerciseSevenController@sendInfo')->name('results7');

Route::get('/exercise8','ExerciseEightController@getView')->name('exercise8');
Route::post('/results8','ExerciseEightController@sendInfo')->name('results8');
