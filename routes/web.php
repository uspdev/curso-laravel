<?php

use App\Http\Controllers\LivroGabrielaController;

use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroSaotomeController;
use App\Http\Controllers\LivroControllerSaotome;
use App\Http\Controllers\LivroFabioFDRPController;
use App\Http\Controllers\LivroLauController;
use App\Http\Controllers\LivroRicardoController;
use App\Http\Controllers\LivroMarisaController;
use App\Http\Controllers\LivroVictorController;
use App\Http\Controllers\LivroMasakikController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('livros', LivroController::class);

Route::resource('livrogabrielas', LivroGabrielaController::class);


Route::get('/livros',[LivroController::class,'index']);

Route::get('/livros/{isbn}',[LivroController::class,'show']);


Route::resource('/livrossaotome', LivroSaotomeController::class);

Route::get('/livros_lau',[LivroLauController::class,'index']);

Route::get('/livrossaotome',[LivroControllerSaotome::class,'index']);
Route::get('/livrossaotome/{isbn}',[LivroControllerSaotome::class,'show']);

Route::resource('/livrolau',LivroLauController::class);


Route::resource('livros-ricardo',LivroRicardoController::class);

Route::get('/livrosmarisa', [LivroMarisaController::class,'index']);
Route::get('/livrosmarisa/{isbn}', [LivroMarisaController::class,'show']);


Route::resource('livrosvictor', LivroVictorController::class);
Route::get('/livrosvictor', [LivroVictorController::class,'index']);
Route::get('/livrosvictor/{isbn}', [LivroVictorController::class,'show']);

Route::get('/livros_fabiofdrp', [LivroFabioFDRPController::class,'index']);
Route::get('/livros_fabiofdrp/{isbn}', [LivroFabioFDRPController::class,'show']);

Route::resource('/livrosmasakik', LivroMasakikController::class);

Route::get('/livros_leandroramos', [LivroLeandroRamosController::class,'index']);
Route::get('/livros_leandroramos/{isbn}', [LivroLeandroRamosController::class,'show']);
