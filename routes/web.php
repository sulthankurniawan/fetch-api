<?php

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

Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('index');
Route::get('/business', [App\Http\Controllers\NewsController::class, 'index'])->name('business');
Route::get('/entertainment', [App\Http\Controllers\NewsController::class, 'index'])->name('entertainment');
Route::get('/health', [App\Http\Controllers\NewsController::class, 'index'])->name('health');
Route::get('/science', [App\Http\Controllers\NewsController::class, 'index'])->name('science');
Route::get('/sports', [App\Http\Controllers\NewsController::class, 'index'])->name('sports');
Route::get('/technology', [App\Http\Controllers\NewsController::class, 'index'])->name('technology');
