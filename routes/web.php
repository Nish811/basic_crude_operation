<?php

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


Route::get('/create', [App\Http\Controllers\StudentController::class, 'create'])->name('create');
Route::get('/index', [App\Http\Controllers\StudentController::class, 'index'])->name('index');
Route::post('/store', [App\Http\Controllers\StudentController::class, 'store'])->name('store');
Route::get('delete/{id}',[ \App\Http\Controllers\StudentController::class, 'delete'])->name('delete');

