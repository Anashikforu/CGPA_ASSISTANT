<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExamController;

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
    return redirect()->route('subject.index');
});

Route::resource('posts', PostController::class);  
Route::resource('exams', ExamController::class);  
Route::get('subject/semester', [ProductController::class,'semester'])-> name('subject.semester');  ;
Route::resource('subject', ProductController::class);
