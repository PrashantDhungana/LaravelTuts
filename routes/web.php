<?php

use App\Http\Controllers\Controller;
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


// Route::resource('/students' ,App\Http\Controllers\StudentController::class);
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create']);
Route::post('/student',[App\Http\Controllers\StudentController::class,'store'])->name('student.name');
Route::get('/student/{Student}/edit', [App\Http\Controllers\StudentController::class, 'edit']);
Route::put('/student/{student}', [App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
Route::get('/student/{Student}', [App\Http\Controllers\StudentController::class, 'show'])->name('student.show');

Route::get('/image', function(){
    return view('image');
});

//route for student show
// Route::get('/student/{student}', [App\Http\Controllers\StudentController::class, 'show']);

//route for delete student
// Route::delete('/student/{student}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('student.destroy');


// Category
/*/category*/

