<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroDenis;

class LivroDenisController extends Controller
{
    public function index(){
        $livros = LivroDenis::all();
        return view('livro_deniss.index',[
            'livros' => $livros
        ]);        
    }

    public function show($isbn){
        $livro = LivroDenis::where('isbn',$isbn)->first();
        return view('livro_deniss.show',[
            'livro' => $livro
        ]);
    }
}
