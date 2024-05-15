<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourAdminController;
use App\Http\Controllers\HomeController;

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
});

require __DIR__.'/auth.php';

Route::get('touradmin/dashboard',[HomeController::class,'index'])->name('touradmin/dashboard');

Route::get('addTour',[TourAdminController::class,'addTour'])->name('addTour');

Route::get('allTours',[TourAdminController::class,'allTours'])->name('allTours');

Route::get('adminAccSetting',[TourAdminController::class,'adminAccSetting'])->name('adminAccSetting');
