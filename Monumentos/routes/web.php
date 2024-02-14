<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MonumentoController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/index', [MonumentoController::class, 'read'])->name('index');
    Route::get('/monumentos/create', [MonumentoController::class, 'create'])->name('monumentos.create');
    Route::post('/monumentos/store', [MonumentoController::class, 'store'])->name('monumentos.store');
});

require __DIR__.'/auth.php';
