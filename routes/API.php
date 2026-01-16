<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexController;

// API Routes สำหรับ Pokedex
Route::prefix('v1')->group(function () {
    Route::apiResource('pokedex', PokedexController::class);
});
