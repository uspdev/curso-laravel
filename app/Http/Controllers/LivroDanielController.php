<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroDaniel;

class LivroDanielController  extends Controller
{
   public function index()
    {
        $livros = LivroDaniel::all();
        return view('livros_daniel.index', [
            'livros' => $livros
        ]);
    }

    public function show($isbn)
    {
        $livro = LivroDaniel::where('isbn', $isbn)->first();
      
        return view('livros_daniel.show', [
            'livro' => $livro
        ]);
    }

}
