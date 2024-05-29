<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user-list');
    Route::get('/user/create', [\App\Http\Controllers\UserController::class, 'create'])->name('user-create');
    Route::post('/user/create', [\App\Http\Controllers\UserController::class, 'store'])->name('user-store');
    Route::get('/user-edit/{user}', [\App\Http\Controllers\UserController::class, 'edit'])->name('user-edit');
    Route::post('/user-edit/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('user-update');
    Route::get('/user-delete/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('user-delete');
    Route::get('/beasiswa', [\App\Http\Controllers\BeasiswaController::class, 'index'])->name('beasiswa-list');
    Route::get('/b-create', [\App\Http\Controllers\BeasiswaController::class, 'create'])->name('beasiswa-create');
    Route::get('/beasiswa_detail', [\App\Http\Controllers\BeasiswaDetailController::class, 'index'])->name('beasiswa_detail-list');
    Route::get('/bd-create', [\App\Http\Controllers\BeasiswaDetailController::class, 'create'])->name('beasiswa_detail-create');
});

require __DIR__.'/auth.php';
