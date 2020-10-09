<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroMicheletController;
Route::get('/livros',[LivroController::class,'index']);
Route::get('/livros/{isbn}',[LivroController::class,'show']);
Route::get('/livro_michelets',[LivroMicheletController::class,'index']);
Route::get('/livro_michelets/{isbn}',[LivroMicheletController::class,'show']);

