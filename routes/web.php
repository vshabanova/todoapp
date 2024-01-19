<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TaskController;
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
    return view('welcome');
});

Route::get('tasks', [TaskController::class, 'index'])->middleware('auth');
Route::post('tasks', [TaskController::class, 'store'])->middleware('auth');
Route::get('tasks-new', [TaskController::class, 'create'])->middleware('auth');
Route::post('tasks/create', [TaskController::class, 'store'])->middleware('auth');
Route::post('/tasks/{task}/complete', [TaskController::class, 'complete'])->middleware('auth');
Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit')->middleware('auth');
Route::patch('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update')->middleware('auth');
Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->middleware('auth')->name('tasks.destroy');





Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

