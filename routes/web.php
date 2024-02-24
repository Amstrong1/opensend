<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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
Route::get('/send', [AppController::class, 'index']);
Route::get('/check', [AppController::class, 'check']);
Route::get('/stand', [AppController::class, 'stand']);
Route::get('/contact', [AppController::class, 'contact']);
Route::get('/login', [AppController::class, 'login']);
Route::get('/register', [AppController::class, 'register']);
