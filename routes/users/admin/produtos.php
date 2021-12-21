<?php

use Illuminate\Support\Facades\Route;

Route::prefix('kits')
    ->name('admin.kits.')
    ->group(function () {
        Route::resource('', KitsController::class);
    });
