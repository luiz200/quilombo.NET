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

use App\Http\Controllers\QuilombController;

Route::get('/', [QuilombController::class, 'index']);
Route::get('/users/publiction', [QuilombController::class, 'publiction'])->middleware('auth');
Route::get('/users/{id}', [QuilombController::class, 'show']);
Route::post('/users', [QuilombController::class, 'store']);
Route::delete('/users/{id}', [QuilombController::class, 'destroy'])->middleware('auth');
Route::get('/users/edit/{id}', [QuilombController::class, 'edit'])->middleware('auth');
Route::put('/users/update/{id}', [QuilombController::class, 'update'])->middleware('auth');

Route::get('/dashboard', [QuilombController::class, 'dashboard'])->middleware('auth');

Route::get('/users/contact', [QuilombController::class, 'contact']);