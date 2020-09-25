<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroMarisaController;
use App\Http\Controllers\LivroVictorController;

Route::get('/livros',[LivroController::class,'index']);

Route::get('/livros/{isbn}',[LivroController::class,'show']);

Route::get('/livrosmarisa', [LivroMarisaController::class,'index']);
Route::get('/livrosmarisa/{isbn}', [LivroMarisaController::class,'show']);

Route::get('/livrosvictor', [LivroVictorController::class,'index']);
Route::get('/livrosvictor/{isbn}', [LivroVictorController::class,'show']);