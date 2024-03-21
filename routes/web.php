<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagination', [PaginationController::class, 'index'])->name('paginations.index');
