<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware' => ['auth', 'auth.vendedor'],
        'namespace' => 'App\Http\Controllers\Vendedor',
    ],
    function () {
        // Orcamentos
        include_once 'vendedor/orcamentos.php';

        // Clientes
        Route::prefix('clientes')
            ->name('vendedor.clientes.')
            ->group(function () {
                Route::resource('', ClientesController::class);
            });
    }
);
