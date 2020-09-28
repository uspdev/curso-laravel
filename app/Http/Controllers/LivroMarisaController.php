<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroMarisa;

class LivroMarisaController extends Controller
{
    public function index(){
        $livromarisas = LivroMarisa::all();
        return view('livrosmarisa.index',[
            'livromarisas' => $livromarisas
        ]);
    }

    public function show($isbn){
        $livromarisa = LivroMarisa::where('isbn',$isbn)->first();
        return view('livrosmarisa.show',[
            'livromarisa' => $livromarisa
        ]);
    }
}
