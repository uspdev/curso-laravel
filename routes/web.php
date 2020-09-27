<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroControllerSaotome;

Route::get('/livros',[LivroController::class,'index']);

Route::get('/livros/{isbn}',[LivroController::class,'show']);


Route::get('/livrossaotome',[LivroControllerSaotome::class,'index']);
Route::get('/livrossaotome/{isbn}',[LivroControllerSaotome::class,'show']);
