<?php

use Illuminate\Support\Facades\Route;

Route::prefix('propostas')
    ->name('vendedor.orcamentos.')
    ->namespace('Orcamentos')
    ->group(function () {

        Route::get('convencional', 'OrcamentoController@convencional')
            ->name('convencional');

        Route::get('demanda', 'OrcamentoController@demanda')
            ->name('demanda');

        Route::get('calc-convencional', 'OrcamentoController@calcConvencional')
            ->name('calc-convencional');
            
    });
