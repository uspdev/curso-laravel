<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivroGabrielaController;

use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroMarisaController;


Route::get('/livrogabrielas', [LivroGabrielaController::class, 'index']);

Route::get('/livrogabrielas/{isbn}',[LivroGabrielaController::class,'show']);
Route::get('/livros/{isbn}',[LivroController::class,'show']);

Route::get('/livrosmarisa', [LivroMarisaController::class,'index']);
Route::get('/livrosmarisa/{isbn}', [LivroMarisaController::class,'show']);

