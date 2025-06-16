<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\RegisterController;

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




// HIỂN THỊ USER
Route::get('/user', [UserController::class, 'index'])->name('user.index');

//DELETE USER
Route::delete('/user{id}',[UserController::class, 'destroy'])->name('user.destroy');

//CREATE USER
Route::get('/register-user', [RegisterController::class, 'registeruser'])->name('user.register');

//UPDATE USER
Route::get('/edit', [UserController::class, ])->name('user.update');

