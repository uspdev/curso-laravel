<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroGabrielaController;

Route::get('/livrogabrielas', [LivroGabrielaController::class, 'index']);

Route::get('/livrogabrielas/{isbn}',[LivroGabrielaController::class,'show']);
