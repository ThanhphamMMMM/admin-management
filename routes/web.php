<?php

use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\MyprofileController;


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
})->name('welcome');


Route::middleware('auth')->group(function () {
    Route::get('/app', [AuthController::class, 'index'])->name('app');
    Route::get('/roles', [RoleController::class, 'index'])->name('role.index');
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
});

Route::middleware('check.permission.role')->group(function () {
    Route::get('/roles', [RoleController::class, 'index'])->name('role.index');
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('role/create', [RoleController::class, 'create'])->name('role.create');
    Route::get('role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::delete('/destroy/{id}', [RoleController::class, 'destroy'])->name('role.destroy');
    Route::delete('/destroy{id}', [UserController::class, 'destroy'])->name('user.destroy');
});
//method-post roles
Route::post('role/store', [RoleController::class, 'store'])->name('role.store');
Route::post('role/update/{id}', [RoleController::class, 'update'])->name('role.update');
//method-post user
Route::post('user/store', [UserController::class, 'store'])->name('user.store');
Route::post('user/update/{id}', [UserController::class, 'update'])->name('user.update');

//Permissions
Route::get('/permissions', [PermissionController::class, 'index'])->name('permission.index');
Route::get('permissions/create', [PermissionController::class, 'create'])->name('permission.create');
Route::post('permissions/store', [PermissionController::class, 'store'])->name('permission.store');
Route::get('permissions/edit/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
Route::post('permissions/update/{id}', [PermissionController::class, 'update'])->name('permission.update');
Route::delete('permissions/destroy/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');

//AUTH
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/checkLogin', [AuthController::class, 'checkLogin'])->name('auth.checkLogin');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/process', [AuthController::class, 'process'])->name('auth.process');

//FORGOT PASSWORD
Route::get('/resetEmail', [ForgotPasswordController::class, 'showForm'])->name('forgot.verify_password');
Route::post('/resetEmail', [ForgotPasswordController::class, 'sendResetLink'])->name('reset.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'newPassword'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'storeNewPassword'])->name('password.update');

// MyProfile
Route::get('/my-profile', [MyprofileController::class, 'myProfile'])->name('myProfile');
Route::post('/update-profile', [MyprofileController::class, 'Update'])->name('updateProfile');

