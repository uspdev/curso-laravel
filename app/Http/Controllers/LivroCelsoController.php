<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroCelso;

class LivroCelsoController extends Controller
{
    public function index() {
        $livros = LivroCelso::all();
        return view('livro_celsos.index', [
            'livros' => $livros,
        ]);
    } 
    public function show($isbn) {        
        $livro = LivroCelso::where('isbn',$isbn)->first();
        return view('livro_celsos.show', [
            'livro' => $livro,
        ]);
    }     
}
