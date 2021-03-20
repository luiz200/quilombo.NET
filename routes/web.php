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
Route::get('/users/contact', [QuilombController::class, 'contact']);
Route::get('/users/profile', [QuilombController::class, 'profile']);
Route::get('/users/login', [QuilombController::class, 'login']);
Route::get('/users/newuser', [QuilombController::class, 'newuser']);
Route::get('/users/publiction', [QuilombController::class, 'publiction']);
Route::post('/users/comment', [QuilombController::class, 'comment']);
Route::post('/users', [QuilombController::class, 'store']);