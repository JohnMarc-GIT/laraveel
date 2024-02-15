<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\CountryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);

Route::get('/students/{student}/academics/create', [AcademicController::class, 'create'])->name('academics.create');
Route::get('/students/{student}/countries/create', [CountryController::class, 'create'])->name('countries.create');

Route::post('/students/{student}/academics', [AcademicController::class, 'store'])->name('academics.store');
Route::post('/students/{student}/countries', [CountryController::class, 'store'])->name('countries.store');

Route::get('/students/{student}/academics/{academic}/edit', [AcademicController::class, 'edit'])->name('academics.edit');
Route::put('/students/{student}/academics/{academic}', [AcademicController::class, 'update'])->name('academics.update');

Route::get('/students/{student}/countries/{country}/edit', [CountryController::class, 'edit'])->name('countries.edit');
Route::put('/students/{student}/countries/{country}', [CountryController::class, 'update'])->name('countries.update');




