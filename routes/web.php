<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InspectionController;
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

        Route::prefix('inspection')->group(function () {
            Route::get('/', [InspectionController::class, 'index'])->name('inspection');
            Route::get('/create', [InspectionController::class, 'create'])->name('inspection.create');
        });

    });

    Route::middleware('role:Admin')->group(function () {

       

    });

});


require __DIR__.'/auth.php';
