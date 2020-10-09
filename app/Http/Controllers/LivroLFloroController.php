<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroLFloroController extends Controller
{
    public function index()
    {
        return view('livroslfloro.index');
    }

    public function show($isbn)
    {
        if ($isbn == '9780195106817') {
            $livro =  "Quicas Borba - Machado de Assis";
        } else {
            $livro =  "Livro não identificado!";
        }

        return view('livroslfloro.show', [
            'livro' => $livro
        ]);
    }
}
