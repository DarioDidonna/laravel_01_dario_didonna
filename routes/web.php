<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/find-job', [PublicController::class, 'findJob']);

Route::get('/companies', [PublicController::class, 'companies']);






