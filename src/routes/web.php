<?php

use Evgeny\TempCode\App\Http\Controllers\TempCodeController;
use Illuminate\Support\Facades\Route;

Route::controller(TempCodeController::class)
    ->prefix('temp-code')
    ->name('temp-code.')
    ->group(function () {
        Route::get('/generate', 'generate')->name('generate');
    });