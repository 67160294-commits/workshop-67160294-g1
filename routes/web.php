<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [FormController::class, 'index'])->name('form.index');

Route::post('/store', [FormController::class, 'store'])->name('form.store');

Route::get('/se', function () {
    return view('template.default');
});
