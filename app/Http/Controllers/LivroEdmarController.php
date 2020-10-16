<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroEdmar;

class LivroEdmarController extends Controller
{
    public function index(){
        $livros = LivroEdmar::all();
        return view('livro_edmar.index',[
            'livros' => $livros
        ]);
    }

    public function show($isbn){
        $livro = LivroEdmar::where('isbn',$isbn)->first();
        return view('livro_edmar.show',[
            'livro' => $livro
        ]);
    }
}
