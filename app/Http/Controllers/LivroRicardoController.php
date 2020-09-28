<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livroricardo;

class LivroRicardoController extends Controller
{
    public function index(){
        $livros = Livroricardo::all();
        return view('livros-ricardo.index',[
            'livros' => $livros
        ]);
    }

    public function show($isbn){
        $livro = Livroricardo::where('isbn',$isbn)->first();
        return view('livros-ricardo.show',[
            'livro' => $livro,
        ]);
    }
}
