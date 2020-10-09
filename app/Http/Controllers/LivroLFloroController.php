<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroLFloroController extends Controller
{
    public function index()
    {
        return "Não há livros cadastrados nesses sistema ainda!";
    }

    public function show($isbn)
    {
        if ($isbn == '9780195106817') {
            return "Quicas Borba - Machado de Assis";
        } else {
            return "Livro não identificado!";
        }
    }
}
