<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\CountryController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('students', StudentController::class);

Route::resource('students.academics', AcademicController::class)->except(['show', 'edit', 'update']);
Route::resource('students.countries', CountryController::class)->except(['show', 'edit', 'update']);


Route::get('/countries', [CountryController::class, 'index']);
Route::get('/academics', [AcademicController::class, 'index']);

//Delete
Route::delete('/students/{student_id}/academics', 'AcademicController@destroy');
Route::delete('/students/{student_id}/countries', 'CountryController@destroy');

//Update
Route::put('/students/{student_id}/academics', 'AcademicController@update');
Route::put('/students/{student_id}/countries', 'CountryController@update');


Route::put('/students/{id}', 'StudentController@update');


