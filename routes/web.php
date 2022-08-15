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

Route::get('/demo', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/test', [App\Http\Controllers\StudentController::class, 'test']);

//form
//FormController, hello()
//hello.blade.php => username,password
