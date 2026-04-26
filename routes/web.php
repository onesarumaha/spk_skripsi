<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/data-guru', [DataGuruController::class, 'index'])->name('data-guru.index');
    Route::get('/data-guru/create', [DataGuruController::class, 'create'])->name('data-guru.create');
    Route::get('/data-guru.edit/{id}', [DataGuruController::class, 'edit'])->name('data-guru.edit');
    Route::delete('/data-guru.destroy/{id}', [DataGuruController::class, 'destroy'])->name('data-guru.destroy');
    Route::post('/data-guru.store', [DataGuruController::class, 'store'])->name('data-guru.store');
    Route::put('/data-guru.update/{id}', [DataGuruController::class, 'update'])->name('data-guru.update');



});

require __DIR__.'/auth.php';
