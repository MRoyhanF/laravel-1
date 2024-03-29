<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'name' => 'boy',
        'role' => 'admin',
        'buah' => ['pisang', 'apel', 'jeruk', 'semangka',' kiwi']
    ]);
});

Route::get('/Students', [StudentController::class, 'index']);
Route::get('/Class', [ClassController::class, 'index']);
Route::get('/Extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/Teacher', [TeacherController::class, 'index']);