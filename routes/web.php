<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\KriteriaController;
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

    Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria.index');
    Route::get('/kriteria/create', [KriteriaController::class, 'create'])->name('kriteria.create');
    Route::get('/kriteria.edit/{id}', [KriteriaController::class, 'edit'])->name('kriteria.edit');
    Route::delete('/kriteria.destroy/{id}', [KriteriaController::class, 'destroy'])->name('kriteria.destroy');
    Route::post('/kriteria.store', [KriteriaController::class, 'store'])->name('kriteria.store');
    Route::put('/kriteria.update/{id}', [KriteriaController::class, 'update'])->name('kriteria.update');



});

require __DIR__.'/auth.php';
