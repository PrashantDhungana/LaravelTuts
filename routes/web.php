<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\User\BlogController as userblog;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SingerController;

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

Route::get('/student/hello', [StudentController::class, 'prashant']);
Route::resource('/student', StudentController::class);


Route::get('/', [StudentController::class, 'index']);



Route::resource('/students' ,App\Http\Controllers\StudentController::class);
// Route::get('/student', [App\Http\Controllers\StudentController::class, 'index']);
// Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create']);
// Route::post('/student',[App\Http\Controllers\StudentController::class,'store'])->name('student.name');
// Route::put('/student/{student}', [App\Http\Controllers\StudentController::class, 'update'])->name('student.update');



// Route::get('/image', function(){
//     return view('image');
// });

// Route::delete('/student/{student}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('student.destroy');
// Route::get('/student/{Student}', [App\Http\Controllers\StudentController::class, 'show'])->name('student.show');
// Route::get('/student/{Student}/edit', [App\Http\Controllers\StudentController::class, 'edit']);


// Category
/*/category*/
Route::get('/user',[UserController::class, 'index']);

Route::get('/user/create', [UserController::class,'create']);
Route::post('/user',[UserController::class,'store'])->name('user.store');

Route::get('/user/{users}/edit',[UserController::class,'edit']);
Route::put('/user/{users}',[UserController:: class,'update'])->name('user.update');

Route::delete('/user/{users}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/{users}', [UserController::class, 'show'])->name('user.show');
// Route::resource('/users' ,App\Http\Controllers\UserController::class);

Route::get('/template', function(){
    return view ('users.index');
});
Route::get('/mail',[MailController::class, 'index']);
Route::get('/data',[MemberController::class, 'index']);


// blog
   

// blog user side   

Route::get('/blogg',[userblog::class,'index']);
 

Route::get('/about', function () {
    return view('blog.about');
   
});
Route::get('/con', function () {
    return view('blog.contact');
   
});



// Route::get('/blog',[BlogController::class, 'index']);
Route::get('/blog',[BlogController::class, 'index']);
Route::get('/blog/create', [BlogController::class,'create']);
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

Route::get('/blog/{blogs}/edit',[BlogController::class,'edit']);
Route::put('/blog/{blogs}',[BlogController::class,'update'])->name('blog.update');

Route::delete('/blog/{blogs}',[BlogController::class,'destroy'])->name('blog.destroy');

Route::get('/blog/{blogs}',[BlogController::class,'show'])->name('blog.show');




// Contact
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/contact/create', [ContactController::class,'create']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contact/{contacts}/edit',[ContactController::class,'edit']);
Route::put('/contact/{contacts}',[ContactController::class,'update'])->name('contact.update');

Route::delete('/contact/{contacts}', [ContactController::class, 'destroy'])->name('contact.destroy');
Route::get('/contact/{contacts}', [ContactController::class, 'show'])->name('contact.show');


// Route::resource('/products',App\Http\Controllers\ProductController::class);
Route::get('/product',[ProductController::class,'index']);
Route::get('/product/create',[ProductController::class,'create']);
Route::post('/product',[ProductController::class,'store'])->name('product.store');

Route::get('/product/{products}/edit',[ProductController::class,'edit']);
Route::put('/product/{products}',[ProductController::class,'update'])->name('product.update');

Route::get('/product/{products}',[ProductController::class,'show'])->name('product.show');
Route::delete('/product/{products}',[ProductController::class,'destroy'])->name('product.destroy');


Route::get('/abc',[App\Http\Controllers\User\ProductController::class,'index']);


//many to many relationship 
Route::get('add-song',[SongController::class,'add_song']);
Route::get('add-singer',[SingerController::class,'add_singer']);
Route::get('show-song/{id}',[SongController::class,'show_song']);
