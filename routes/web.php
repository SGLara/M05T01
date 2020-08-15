<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/M05-exercises', 'm05t01')->name('prev_homework');

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

//--------------------------------------------------------------------------------------
//QUERY ROUTES

Route::get('/query_builder', 'QueryBuilderController@index')->name('query_builder');

Route::get('/query1', 'QueryBuilderController@showQueryOne')->name('query1');
Route::get('/query2', 'QueryBuilderController@showQueryTwo')->name('query2');
Route::get('/query3', 'QueryBuilderController@showQueryThree')->name('query3');
Route::get('/query4', 'QueryBuilderController@showQueryFour')->name('query4');
Route::get('/query5', 'QueryBuilderController@showQueryFive')->name('query5');
Route::get('/query6', 'QueryBuilderController@showQuerySix')->name('query6');
Route::get('/query7', 'QueryBuilderController@showQuerySeven')->name('query7');
Route::get('/query8', 'QueryBuilderController@showQueryEight')->name('query8');
Route::get('/query9', 'QueryBuilderController@showQueryNine')->name('query9');
Route::get('/query10', 'QueryBuilderController@showQueryTen')->name('query10');
Route::get('/query11', 'QueryBuilderController@showQueryEleven')->name('query11');
Route::get('/query12', 'QueryBuilderController@showQueryTwelve')->name('query12');
Route::get('/query13', 'QueryBuilderController@showQueryThirteen')->name('query13');
Route::get('/query14', 'QueryBuilderController@showQueryFourteen')->name('query14');
Route::get('/query15', 'QueryBuilderController@showQueryFifteen')->name('query15');
Route::get('/query16', 'QueryBuilderController@showQuerySixteen')->name('query16');
Route::get('/query17', 'QueryBuilderController@showQuerySeventeen')->name('query17');
Route::get('/query18', 'QueryBuilderController@showQueryEighteen')->name('query18');
Route::get('/query19', 'QueryBuilderController@showQueryNineteen')->name('query19');
Route::get('/query20', 'QueryBuilderController@showQueryTwenty')->name('query20');
Route::get('/query21', 'QueryBuilderController@showQueryTwentyOne')->name('query21');
Route::get('/query22', 'QueryBuilderController@showQueryTwentyTwo')->name('query22');
Route::get('/query23', 'QueryBuilderController@showQueryTwentyThree')->name('query23');
Route::get('/query24', 'QueryBuilderController@showQueryTwentyFour')->name('query24');
Route::get('/query25', 'QueryBuilderController@showQueryTwentyFive')->name('query25');