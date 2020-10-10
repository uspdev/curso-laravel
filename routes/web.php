<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroDenisController;

Route::get('/livros', [LivroController::class,'index']);

Route::get('/livros/{isbn}', [LivroController::class,'show']);

Route::get('/livrodeniss', [LivroDenisController::class,'index']);

Route::get('/livrodeniss/{isbn}', [LivroDenisController::class,'show']);
