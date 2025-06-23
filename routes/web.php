<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;

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



//INDEX-ROLE
Route::get('/index-roles',[RoleController::class, 'index'])->name('role.index');
//CREATE-ROLE
Route::get('/create-roles',[RoleController::class, 'create'])->name('role.create');
//STORE-ROLE
Route::post('/store-roles',[RoleController::class, 'store'])->name('role.store');
//INDEX-EDIT ROLE
Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
//UPDATE-ROLE
Route::post('/roles{id}',[RoleController::class,'update'])->name('role.update');
// DESTROY-ROLE
Route::delete('/roles/{id}',[RoleController::class,'destroy'])->name('role.destroy');



// HIỂN THỊ USER
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
Route::delete('/user{id}',[UserController::class, 'destroy'])->name('user.destroy');








