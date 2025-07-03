<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;



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

Route::get('/dashboard',[DashboardController::class, 'index']);


//ROLE
Route::get('/roles',[RoleController::class, 'index'])->name('role.index');
Route::get('role/create',[RoleController::class, 'create'])->name('role.create');
Route::post('role/store',[RoleController::class, 'store'])->name('role.store');
Route::get('role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
Route::post('role/update/{id}',[RoleController::class,'update'])->name('role.update');
Route::delete('/destroy/{id}',[RoleController::class,'destroy'])->name('role.destroy');

//  USER
Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::post('user/store', [UserController::class, 'store'])->name('user.store');
Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/destroy{id}', [UserController::class, 'destroy'])->name('user.destroy');

//AUTH
Route::get('/login',[AuthController::class, 'showlogin'])->name('auth.login');
Route::post('/checklogin',[AuthController::class, 'checklogin'])->name('auth.checklogin');

Route::get('/register',[AuthController::class, 'showregister'])->name('auth.register');
Route::post('/process',[AuthController::class,'process'])->name('auth.process');