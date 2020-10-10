<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroEbonilha;

class LivroEBonilhaController extends Controller
{
    public function index()
    {
        $livros = LivroEbonilha::all();
        return view('livro_ebonilha.index', [
            'livros' => $livros
        ]);
    }

    public function show($isbn)
    {
        $livro = LivroEbonilha::where('isbn', $isbn)->first();

        return view('livro_ebonilha.show', [
            'livro' => $livro
        ]);
    }
}
