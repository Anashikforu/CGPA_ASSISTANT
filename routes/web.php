<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\TaskController;

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
    return redirect()->route('routine.index');
});
Auth::routes();

Route::resource('posts', PostController::class);  
Route::resource('exams', ExamController::class)->middleware('auth');
Route::get('subject/semester', [ProductController::class,'semester'])-> name('subject.semester')->middleware('auth');
Route::resource('subject', ProductController::class)->middleware('auth');
Route::resource('routine', RoutineController::class)->middleware('auth');
Route::resource('monitor', MonitorController::class)->middleware('auth');
Route::resource('todo', TaskController::class)->middleware('auth');
Route::post('todo/updateStatus', [TaskController::class,'updateStatus'])-> name('todo.updateStatus')->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
