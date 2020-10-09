<?php

namespace App\Http\Controllers;

use App\Models\LivroLFloro;
use Illuminate\Http\Request;

class LivroLFloroController extends Controller
{
    public function index()
    {
        $livros = LivroLFloro::all();
        return view('livroslfloro.index', [
            'livros' => $livros
        ]);
    }

    public function show($isbn)
    {
        $livro = LivroLFloro::where('isbn', $isbn)->first();

        return view('livroslfloro.show', [
            'livro' => $livro
        ]);
    }
}
