<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livrofernando;

class LivroFernandoController extends Controller
{
    public function index()
    {
        $livros = Livrofernando::all();
        return view('livro_fernandos.index',[
            'livros' => $livros,
        ]);
    }
    public function show($isbn)
    {
        $livro = Livrofernando::where('isbn',$isbn)->first();
        return view('livro_fernandos.show',[
            'livro' => $livro,
        ]);
    }
}
