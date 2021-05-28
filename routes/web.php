<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LivroController;

Route::get('/login/senhaunica', [LoginController::class, 'redirectToProvider']);
Route::get('/callback', [LoginController::class, 'handleProviderCallback']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('/', [LivroController::class, 'index']);
Route::post('logout', [LoginController::class, 'logout']);

Route::resource('/livros', LivroController::class);
Route::get('/livros/{isbn}', [LivroController::class, 'show']);
