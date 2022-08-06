<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('stores')->group(function () {
    Route::get('/', [StoreController::class, 'index'])->name('stores.index');
    Route::get('/{type}/show', [StoreController::class, 'show'])->name('stores.show');
    Route::get('/{type}/create', [StoreController::class, 'create'])->name('stores.create');
});
