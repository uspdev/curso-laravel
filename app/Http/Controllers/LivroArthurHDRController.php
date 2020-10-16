<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroArthurHDR;

class LivroArthurHDRController extends Controller
{
    public function index(){
        $livros = LivroArthurHDR::all();
        return view('livro_ArthurHDR.index',[
            'livros' => $livros
        ]);
    }

    public function show($isbn){
        $livro = LivroArthurHDR::where('isbn', $isbn)->first();
        if($livro != '')
        return view('livro_ArthurHDR.show', [
            'livro' => $livro,
        ]);
        else
            echo 'Livro não adicionado';
    }
}
