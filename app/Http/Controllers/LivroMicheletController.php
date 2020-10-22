<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroMichelet;

class LivroMicheletController extends Controller
{
    public function index(){
        $livros = LivroMichelet::all();
        return view('livro_michelets.index',[
            'livros' => $livros
        ]);
    }

    public function show($isbn){
        $livro = LivroMichelet::where('isbn',$isbn)->first();
        return view('livro_michelets.show',[
            'livro' => $livro,
        ]);
    }
}
