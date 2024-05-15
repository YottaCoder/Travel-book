<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourAdminController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/',[HomeController::class,'home']);
Route::get('/dashboard',[HomeController::class,'login_home'])->middleware(['auth', 'verified'])->name('dashboard');

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

Route::post('upload_tour',[TourAdminController::class,'upload_tour'])->name('upload_tour');

Route::get('/allTours',[TourAdminController::class,'showtour'])->name('allTours');

Route::get('/deletetour/{id}',[TourAdminController::class,'deletetour']);

Route::get('/search-tours', [HomeController::class, 'search'])->name('searchTours');