<?php

use Illuminate\Support\Facades\Route;

Route::prefix('kits')->group(function () {
    
    Route::get('/lista-kits', 'KitsController@index')->name('admin.kits.todos-kits');
});
