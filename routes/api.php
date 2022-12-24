<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('login')->post('/login', 'Api\AuthController@login');
Route::name('columns.index')->get('/columns', 'Api\ColumnController@index');

Route::middleware('auth:api')->group(function () {
    Route::name('diaries.index')->get('/diaries', 'Api\DiaryController@index');
    Route::name('meals.index')->get('/meals', 'Api\MealController@index');
    Route::name('records.index')->get('/records', 'Api\RecordController@index');
    Route::name('exercises.index')->get('/exercises', 'Api\ExerciseController@index');
});
