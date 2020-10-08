<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro_9793951;

class Livro_9793951Controller extends Controller
{
    public function index(){
        $livros = Livro_9793951::all();
        return view('livro_9793951.index',[
            'livros' => $livros
        ]);
    }

    public function show($isbn){
        $livro = Livro_9793951::where('isbn', $isbn)->first();
        if($livro != '')
        return view('livro_9793951.show', [
            'livro' => $livro,
        ]);
        else
            echo 'Livro não adicionado';
    }
}
