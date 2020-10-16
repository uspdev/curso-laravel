<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroGroff;

class LivroGroffController extends Controller
{
    public function index(){
        $livros = LivroGroff::all();

        return view('livro_groffs.index',[
            'livros' => $livros
        ]);
    }
    
    public function show($isbn){
        $livro = LivroGroff::where('isbn',$isbn)->first();
        return view('livro_groffs.show',[
            'livro' => $livro
        ]);
    }
}
