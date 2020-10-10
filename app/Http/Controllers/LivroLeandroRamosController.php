<?php

namespace App\Http\Controllers;

use App\Models\LivroLeandroRamos;
use Illuminate\Http\Request;

class LivroLeandroRamosController extends Controller
{
        public function index(){
        $livros = LivroLeandroRamos::all();
        return view('livros_leandroramos.index',[
            'livros' => $livros
        ]);
    }

    public function show($isbn){
        $livro = LivroLeandroRamos::where('isbn', $isbn)->first();
        return view('livros_leandroramos.show', [
            'livro' => $livro,
        ]);
    }
}
