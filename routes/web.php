<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivroGabrielaController;

use App\Http\Controllers\LivroController;

use App\Http\Controllers\LivroRicardoController;

use App\Http\Controllers\LivroMarisaController;
use App\Http\Controllers\LivroVictorController;

Route::get('/livros',[LivroController::class,'index']);

Route::get('/livrogabrielas', [LivroGabrielaController::class, 'index']);

Route::get('/livrogabrielas/{isbn}',[LivroGabrielaController::class,'show']);
Route::get('/livros/{isbn}',[LivroController::class,'show']);

Route::get('/livros-ricardo',[LivroRicardoController::class,'index']);

Route::get('/livros-ricardo/{isbn}',[LivroRicardoController::class,'show']);
Route::get('/livrosmarisa', [LivroMarisaController::class,'index']);
Route::get('/livrosmarisa/{isbn}', [LivroMarisaController::class,'show']);

Route::get('/livrosvictor', [LivroVictorController::class,'index']);
Route::get('/livrosvictor/{isbn}', [LivroVictorController::class,'show']);
