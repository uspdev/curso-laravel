<?php

namespace App\Http\Controllers;

use App\Models\LivroFabioFDRP;
use Illuminate\Http\Request;

class LivroFabioFDRPController extends Controller
{
        public function index(){
        $livros = LivroFabioFDRP::all();
        return view('livros_fabiofdrp.index',[
            'livros' => $livros
        ]);
    }

    public function show($isbn){
        $livro = LivroFabioFDRP::where('isbn', $isbn)->first();
        return view('livros_fabiofdrp.show', [
            'livro' => $livro,
        ]);
    }
}
