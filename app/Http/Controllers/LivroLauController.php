<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livrolau;

class LivroLauController extends Controller
{
    public function index()
    {
        $livros = Livrolau::all();
        return view('livrosLau.index', [
            'livros' => $livros,
        ]);
    }

    public function show($isbn)
    {
        $livro = Livrolau::where('isbn', $isbn)->first();
     
        return view('livrosLau.show', [
            'livro' => $livro,
        ]);
    }

}
