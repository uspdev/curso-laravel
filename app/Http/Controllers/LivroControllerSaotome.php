<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroSaotome;

class LivroControllerSaotome extends Controller
{
    public function index(){
        $livros = LivroSaotome::all();
        return view('livrossaotome.index',[
            'livros' => $livros
        ]);
    }

    public function show($isbn){
        $livro = LivroSaotome::where('isbn',$isbn)->first();
        return view('livrossaotome.show',[
            'livro' => $livro,
        ]);
    }
}
