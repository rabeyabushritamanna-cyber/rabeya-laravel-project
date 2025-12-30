<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\usercontroller;
use App\Http\Controllers\admin\bannercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->get('/dashboard/user/all',[UserController::class, 'all'])->name('all.user');
Route::middleware('auth')->get('/dashboard/user/add',[UserController::class, 'add'])->name('add.user');
Route::middleware('auth')->get('/dashboard/user/view',[UserController::class, 'view'])->name('view.user');
Route::middleware('auth')->get('/dashboard/user/edit',[UserController::class, 'edit'])->name('edit.user');

// .................... Banner.........................................................................................

Route::middleware('auth')->get('/dashboard/banner/all',[bannerController::class, 'all'])->name('all.banner');
Route::middleware('auth')->get('/dashboard/banner/add',[bannerController::class, 'add'])->name('add.banner');
Route::middleware('auth')->get('/dashboard/banner/view',[bannerController::class, 'view'])->name('view.banner');
Route::middleware('auth')->get('/dashboard/banner/edit',[bannerController::class, 'edit'])->name('edit.banner');




require __DIR__.'/auth.php';
