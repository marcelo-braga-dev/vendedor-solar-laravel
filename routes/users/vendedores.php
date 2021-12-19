<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'auth.vendedor'], 'prefix' => 'vendedor'], function () {
    Route::get('tabela', function () {
        return view('pages.tables');
    })->name('table');
});
// http://localhost/vendedor/tabela