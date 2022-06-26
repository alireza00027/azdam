<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('store')->group(function () {
    Route::get('/create', [StoreController::class, 'create'])->name('stors.create');
});
