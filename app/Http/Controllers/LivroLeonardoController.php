<?php

namespace App\Http\Controllers;

use App\Models\LivroLeonardo;
use Illuminate\Http\Request;

class LivroLeonardoController extends Controller
{
    public function index() {
        $livros = LivroLeonardo::all();
        return view('livros-leonardo.index')->with('livros', $livros);
    }

    public function show($isbn)
    {
        $livro = LivroLeonardo::where('isbn', $isbn)->first();
        return view('livros-leonardo.show')->with('livro', $livro);
    }
}
