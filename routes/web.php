<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroLauController;

Route::get('/livros',[LivroController::class,'index']);

Route::get('/livros/{isbn}',[LivroController::class,'show']);

// LivroLauraController

Route::get('/livros_lau',[LivroLauController::class,'index']);

Route::get('/livros_lau/{isbn}',[LivroLauController::class,'show']);



