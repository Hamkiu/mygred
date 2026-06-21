<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\PremisController;
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

       

        Route::prefix('premis')->group(function () {
            Route::get('/', [PremisController::class, 'index'])->name('premis');
            Route::any('/list', [PremisController::class, 'list'])->name('premis.list');
            Route::get('/create', [PremisController::class, 'create'])->name('premis.create');
            Route::get('/cari-akaun', [PremisController::class, 'cariAkaun'])->name('premis.cari-akaun');
            Route::post('/store', [PremisController::class, 'store'])->name('premis.store');
            Route::get('/edit/{id}', [PremisController::class, 'edit'])->name('premis.edit');
            Route::post('/update/{id}', [PremisController::class, 'update'])->name('premis.update');
            Route::get('/destroy/{id}', [PremisController::class, 'destroy'])->name('premis.destroy');

            Route::prefix('inspection')->group(function () {
                Route::get('/', [InspectionController::class, 'index'])->name('inspection');
                Route::get('/create/{id}', [InspectionController::class, 'create'])->name('premis.inspection.create');
                Route::post('/store/{id}', [InspectionController::class, 'store'])->name('premis.inspection.store');
                Route::any('/list/{id}', [InspectionController::class, 'list'])->name('inspection.list');    
                Route::get('/edit/{id}', [InspectionController::class, 'edit'])->name('inspection.edit');
                Route::get('/show/{id}', [InspectionController::class, 'show'])->name('inspection.show');
                Route::get('/destroy/{id}', [InspectionController::class, 'destroy'])->name('inspection.destroy');
            });
        });

    });

    Route::middleware('role:Admin')->group(function () {

       

    });

});


require __DIR__.'/auth.php';
