<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivreController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livres/create' , [LivreController::class , 'create'])->name('livres.create');
Route::post('livres' , [LivreController::class , 'store'])->name('livres.store');
Route::get('/livres' , [LivreController::class , 'index'])->name('livres.index');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');