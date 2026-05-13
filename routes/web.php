<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PremisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KompaunController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('premis')->group(function () {

        Route::get('/', [PremisController::class, 'index'])->name('premis');
    });

    Route::prefix('kategori')->group(function () {

        Route::get('/', [KategoriController::class, 'index'])->name('kategori');
    });

    Route::prefix('kompaun')->group(function () {

        Route::get('/', [KompaunController::class, 'index'])->name('kompaun');
        Route::post('/list', [KompaunController::class, 'list'])->name('kompaun.list');
        Route::get('/create', [KompaunController::class, 'create'])->name('kompaun.create');
    });
});


require __DIR__.'/auth.php';
