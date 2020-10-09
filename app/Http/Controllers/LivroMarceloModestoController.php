<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroMarceloModesto;

class LivroMarceloModestoController extends Controller
{
    public function index(){
        $livros = LivroMarceloModesto::all();
        return view('livros_marcelomodesto.index',[ 'livros' => $livros]);
    }

    
    public function show($isbn){
        $livro = LivroMarceloModesto::where('isbn',$isbn)->first();
        return view('livros_marcelomodesto.show',[
            'livro' => $livro
        ]);
    }
    
}
