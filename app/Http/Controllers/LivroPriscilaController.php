<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroPriscila;

class LivroPriscilaController extends Controller
{
    /* Cadastro de Controle
    Título: Capitães de Areia
    Autor: Jorge Amado
    ISBN: 978853593386
    */
    public function index() {
        $livros = LivroPriscila::all();
        return view('livro_priscilas.index', [
            'livros' => $livros
        ]);
    }

    public function show($isbn) {
        $livro = LivroPriscila::where('isbn',$isbn)->first();

        return view('livro_priscilas.show', [
            'livro' => $livro
        ]);
    }
}
