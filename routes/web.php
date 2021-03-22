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
Route::get('/users/publiction', [QuilombController::class, 'publiction'])->middleware('auth');
Route::get('/users/{id}', [QuilombController::class, 'show']);
Route::get('/users/comment', [QuilombController::class, 'comment'])->middleware('auth');
Route::post('/users', [QuilombController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
