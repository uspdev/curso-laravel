<?php

use App\Http\Controllers\LivroGabrielaController;

use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroControllerSaotome;
use App\Http\Controllers\LivroFabioFDRPController;
use App\Http\Controllers\LivroLauController;

use App\Http\Controllers\LivroRicardoController;

use App\Http\Controllers\LivroMarisaController;
use App\Http\Controllers\LivroVictorController;

Route::resource('livros', LivroController::class);

Route::resource('livrogabrielas', LivroGabrielaController::class);


Route::get('/livros/{isbn}',[LivroController::class,'show']);

Route::get('/livrossaotome',[LivroControllerSaotome::class,'index']);
Route::get('/livrossaotome/{isbn}',[LivroControllerSaotome::class,'show']);

// LivroLau
Route::resource('/livrolau',LivroLauController::class);


Route::resource('livros-ricardo',LivroRicardoController::class);

Route::get('/livrosmarisa', [LivroMarisaController::class,'index']);
Route::get('/livrosmarisa/{isbn}', [LivroMarisaController::class,'show']);


Route::resource('livrosvictor', LivroVictorController::class);
Route::get('/livrosvictor', [LivroVictorController::class,'index']);
Route::get('/livrosvictor/{isbn}', [LivroVictorController::class,'show']);

Route::get('/livros_fabiofdrp', [LivroFabioFDRPController::class,'index']);
Route::get('/livros_fabiofdrp/{isbn}', [LivroFabioFDRPController::class,'show']);

