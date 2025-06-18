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



//ROLE
Route::get('/index-roles',[RoleController::class, 'index'])->name('role.index');
//FORM-ROLE
Route::get('/form-roles',[RoleController::class, 'index_form'])->name('role.indexform');
//STORE ROLE
Route::post('/store-role',[RoleController::class, 'store'])->name('role.store');




// HIỂN THỊ USER
Route::get('/index-users', [UserController::class, 'index'])->name('user.index');
//FORM-USER
Route::get('/form-users', [UserController::class, 'index_form'])->name('user.indexform');
//STORE-USER
Route::post('/store-user', [UserController::class, 'store'])->name('user.srore');








//DELETE USER
Route::delete('/destroy-user{id}',[UserController::class, 'destroy'])->name('user.destroy');


//UPDATE USER
Route::get('/edit', [UserController::class, ])->name('user.update');

