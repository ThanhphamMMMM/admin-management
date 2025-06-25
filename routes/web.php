<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\RegisterController;

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


//ROLE
//INDEX-ROLE
Route::get('/roles',[RoleController::class, 'index'])->name('role.index');
//CREATE-ROLE
Route::get('/create',[RoleController::class, 'create'])->name('role.create');
//STORE-ROLE
Route::post('/store',[RoleController::class, 'store'])->name('role.store');
//INDEX-EDIT ROLE
Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
//UPDATE-ROLE
Route::post('/update/{id}',[RoleController::class,'update'])->name('role.update');
// DESTROY-ROLE
Route::delete('/destroy/{id}',[RoleController::class,'destroy'])->name('role.destroy');


//  USER
//index
Route::get('/index-users', [UserController::class, 'index'])->name('user.index');
//CREATE-USER
Route::get('/create-users', [UserController::class, 'create'])->name('user.create');
//STORE-USER
Route::post('/store-users', [UserController::class, 'store'])->name('user.store');
//EDIT-USER
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
//UPDATE-USER
Route::post('/users/{id}', [UserController::class, 'update'])->name('user.update');
//DESTROY-USER
Route::delete('/user{id}', [UserController::class, 'destroy'])->name('user.destroy');


//AUTH
//login-index
Route::get('/login',[AuthController::class, 'showlogin'])->name('auth.login');
Route::post('/checklogin',[AuthController::class, 'checklogin'])->name('auth.checklogin');

Route::get('/register',[AuthController::class, 'showregister'])->name('auth.register');
Route::post('/process',[AuthController::class,'process'])->name('auth.process');