<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeasiswaController;
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

    Route::get('/user', [UserController::class, 'index'])->name('user-list');
    Route::get('/user/create', [UserController::class, 'create'])->name('user-create');
    Route::post('/user/create', [UserController::class, 'store'])->name('user-store');
    Route::get('/user-edit/{user}', [UserController::class, 'edit'])->name('user-edit');
    Route::post('/user-edit/{user}', [UserController::class, 'update'])->name('user-update');
    Route::get('/user-delete/{user}', [UserController::class, 'destroy'])->name('user-delete');

    Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('periodebs-list');
    Route::get('/beasiswa/create', [BeasiswaController::class, 'create'])->name('periodebs-create');
    Route::post('/beasiswa/create', [BeasiswaController::class, 'store'])->name('periodebs-store');
    Route::get('/beasiswa/edit/{id}', [BeasiswaController::class, 'edit'])->name('periodebs-edit');
    Route::post('/beasiswa/edit/{id}', [BeasiswaController::class, 'update'])->name('periodebs-update');
    Route::get('/beasiswa/delete/{id}', [BeasiswaController::class, 'destroy'])->name('periodebs-delete');

    Route::get('/beasiswa_detail', [BeasiswaDetailController::class, 'index'])->name('beasiswa_detail-list');
    Route::get('/bd-create', [BeasiswaDetailController::class, 'create'])->name('beasiswa_detail-create');
});

require __DIR__.'/auth.php';

