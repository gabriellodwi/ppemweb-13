<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth:custom_user')->group(function () {
    Route::get('/home', [UserController::class, 'index'])->name('home');
    Route::get('/users', [UserController::class, 'viewTable'])->name('viewTable');
    Route::get('/users/create', [UserController::class, 'create'])->name('createUser');
    Route::post('/users', [UserController::class, 'store'])->name('storeUser');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('editUser');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('updateUser');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('deleteUser');
});
