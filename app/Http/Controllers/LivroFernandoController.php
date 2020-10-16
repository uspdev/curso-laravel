<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroFernando;

class LivroFernandoController extends Controller
{
    public function index()
    {
        $livros = LivroFernando::all();
        return view('livro_fernandos.index',[
            'livros' => $livros,
        ]);
    }
    public function show($isbn)
    {
        $livro = LivroFernando::where('isbn',$isbn)->first();
        return view('livro_fernandos.show',[
            'livro' => $livro,
        ]);
    }
}
