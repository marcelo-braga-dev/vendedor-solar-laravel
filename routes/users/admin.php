<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware' => ['auth', 'auth.admin'],
        'namespace' => 'App\Http\Controllers\Admin',
    ],
    function () {

        include_once 'admin/produtos.php';
        
    }
);
