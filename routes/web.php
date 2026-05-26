<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PremisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KompaunController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/test-oracle', function () {

//     $data = Kompaun::first();

//     dd($data);

// });

Route::get('/test', function () {

    return \App\Models\InspectionSection::with([
        'components.items'
    ])->orderBy('sort')->get();

});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {

    Route::middleware('role:Admin|User')->group(function () {

        Route::prefix('dashboard')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        });

        Route::prefix('kompaun')->group(function () {

            Route::get('/', [KompaunController::class, 'index'])->name('kompaun');
            Route::any('/list', [KompaunController::class, 'list'])->name('kompaun.list');
            Route::get('/create', [KompaunController::class, 'create'])->name('kompaun.create');
        });

        Route::prefix('kategori')->group(function () {

            Route::get('/', [KategoriController::class, 'index'])->name('kategori');
        });

        Route::prefix('premis')->group(function () {

            Route::get('/', [PremisController::class, 'index'])->name('premis');
        });

    });

    Route::middleware('role:Admin')->group(function () {

       

    });

});


require __DIR__.'/auth.php';
