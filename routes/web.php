<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    // return "hello";
});
Route::get('/hello', function () {
    return view('hello');
    // return "hello";
});
Route::post('/hello',[App\Http\Controllers\StudentController::class,'store'])->name('student.name');

Route::get('/front', function () {
    return view('frontend');
    // return "hello";
});

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index']);

// Category
/*/category*/

