<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroFred;

class LivroFredController extends Controller
{
    public function index(){
        $livros = LivroFred::all();
        return view('livrosfred.index',[
            'livros' => $livros
        ]);
    }

    public function show($isbn){
        $livro = LivroFred::where('isbn',$isbn)->first();
        return view('livrosfred.show',[
            'livro' => $livro
        ]);
    }
}
