<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LivroLeonardoController;

use App\Http\Controllers\LivroGabrielaController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroPriscilaController;
use App\Http\Controllers\LivroEBonilhaController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroSaotomeController;
use App\Http\Controllers\LivroControllerSaotome;
use App\Http\Controllers\LivroFabioFDRPController;
use App\Http\Controllers\LivroLauController;
use App\Http\Controllers\LivroRicardoController;
use App\Http\Controllers\LivroMarisaController;
use App\Http\Controllers\LivroVictorController;
use App\Http\Controllers\LivroCelsoController;
use App\Http\Controllers\LivroFredController;
use App\Http\Controllers\LivroMasakikController;
use App\Http\Controllers\LivroDanielController;
use App\Http\Controllers\LivroLeandroRamosController;
use App\Http\Controllers\LivroMarceloDaudtController;

use App\Http\Controllers\LivroFabiController;
use App\Http\Controllers\LivroArthurHDRController;

use App\Http\Controllers\LivroLFloroController;
use App\Http\Controllers\LivroMarceloModestoController;

use App\Http\Controllers\LivroFernandoController;

use App\Http\Controllers\LivroTapiaController;

use App\Http\Controllers\LivroWillController;
use App\Http\Controllers\LivroEdmarController;

use App\Http\Controllers\LivroAlessandroOliveiraController;

Route::get('/', [IndexController::class, 'index']);

Route::get('/livros_leonardo', [LivroLeonardoController::class, 'index']);
Route::get('/livros_leonardo/{isbn}', [LivroLeonardoController::class, 'show']);

Route::resource('livros', LivroController::class);


Route::resource('livrogabrielas', LivroGabrielaController::class);

Route::get('livrostapia', [LivroTapiaController::class, 'index']);
Route::get('livrostapia/{isbn}', [LivroTapiaController::class, 'show']);

Route::get('/livros', [LivroController::class, 'index']);

Route::get('/livros/{isbn}', [LivroController::class, 'show']);


Route::resource('/livrossaotome', LivroSaotomeController::class);

Route::get('/livros_lau', [LivroLauController::class, 'index']);

#Route::get('/livrossaotome', [LivroControllerSaotome::class, 'index']);
Route::get('/livrossaotome', [LivroSaotomeController::class, 'index']);
#Route::get('/livrossaotome/{isbn}', [LivroControllerSaotome::class, 'show']);
Route::get('/livrossaotome/{isbn}', [LivroSaotomeController::class, 'show']);

Route::resource('/livrolau', LivroLauController::class);


Route::resource('livros-ricardo', LivroRicardoController::class);

Route::get('/livrosmarisa', [LivroMarisaController::class, 'index']);
Route::get('/livrosmarisa/{isbn}', [LivroMarisaController::class, 'show']);


Route::resource('livrosvictor', LivroVictorController::class);

Route::get('/livros_fabiofdrp', [LivroFabioFDRPController::class, 'index']);
Route::get('/livros_fabiofdrp/{isbn}', [LivroFabioFDRPController::class, 'show']);

use App\Http\Controllers\LivroWillEEController;
use App\Models\LivroAlessandroOliveira;

Route::resource('/livros_willEE', LivroWillEEController::class);


Route::get('/livrosfabi', [LivroFabiController::class, 'index']);
Route::get('/livrosfabi/{isbn}', [LivroFabiController::class, 'show']);

Route::resource('livros_ArthurHDR', LivroArthurHDRController::class);
Route::get('/livros_ArthurHDR', [LivroArthurHDRController::class, 'index']);
Route::get('/livros_ArthurHDR/{isbn}', [LivroArthurHDRController::class, 'show']);


Route::get('/livros_marcelomodesto', [LivroMarceloModestoController::class, 'index']);
Route::get('/livros_marcelomodesto/{isbn}', [LivroMarceloModestoController::class, 'show']);


Route::resource('/livrosmasakik', LivroMasakikController::class);

Route::resource('/livros_daniel', LivroDanielController::class);

Route::resource('/livros_leandroramos', LivroLeandroRamosController::class)->parameters([
    'livros_leandroramos' => 'livro',
]);

Route::resource('/livroslfloro', LivroLFloroController::class);
//Route::get('/livroslfloro', [LivroLFloroController::class, 'index']);
//Route::get('/livroslfloro/{isbn}', [LivroLFloroController::class, 'show']);

Route::get('/livros_MarceloDaudt', [LivroMarceloDaudtController::class,'index']);
Route::get('/livros_MarceloDaudt/{isbn}', [LivroMarceloDaudtController::class, 'show']);

Route::get('/livroslfloro', [LivroLFloroController::class, 'index']);
Route::get('/livroslfloro/{isbn}', [LivroLFloroController::class, 'show']);

Route::get('/livros_ebonilha', [LivroEBonilhaController::class, 'index']);
Route::get('/livros_ebonilha/{isbn}', [LivroEBonilhaController::class, 'show']);

#Route::get('/livros_fernando', [LivroFernandoController::class, 'index']);
#Route::get('/livros_fernando/{isbn}', [LivroFernandoController::class, 'show']);
Route::resource('/livros_fernando', LivroFernandoController::class);

//Route::get('/livros_priscila', [LivroPriscilaController::class, 'index']);
//Route::get('/livros_priscila/{isbn}', [LivroPriscilaController::class, 'show']);
Route::resource('/livro_priscilas', LivroPriscilaController::class);

Route::get('/livro_wills', [LivroWillController::class, 'index']);
Route::get('/livro_wills/{livro}', [LivroWillController::class, 'show'])->name('will.show');

Route::get('/livrosfred',[LivroFredController::class,'index']);
Route::get('/livrosfred/{isbn}',[LivroFredController::class,'show']);


Route::get('/livroedmar',[LivroEdmarController::class,'index']);
Route::get('/livroedmar/{isbn}',[LivroEdmarController::class,'show']);

Route::get('/livros_alessandrooliveira', [LivroAlessandroOliveiraController::class, 'index']);
Route::get('/livros_alessandrooliveira/{livro}', [LivroAlessandroOliveiraController::class, 'show']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('/livrosvictor', [LivroVictorController::class,'index']);
Route::get('/livrosvictor/{isbn}', [LivroVictorController::class,'show']);

Route::get('/livro_celsos', [LivroCelsoController::class,'index']);
Route::get('/livro_celsos/{isbn}', [LivroCelsoController::class,'show']);

Route::get('/login/senhaunica', [LoginController::class, 'redirectToProvider']);
Route::get('/logincallback', [LoginController::class, 'handleProviderCallback']);

Route::resource('/livrosMarceloDaudt', LivroMarceloDaudtController::class);
