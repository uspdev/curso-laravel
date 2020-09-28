<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroGabriela;

class LivroGabrielaController extends Controller
{
    public function index(){
        $livrogabrielas = LivroGabriela::all();
        return view('livrogabrielas.index',[
            'livrogabrielas' => $livrogabrielas
        ]);
    }

    public function show($isbn){
        $livrogabriela = LivroGabriela::where('isbn', $isbn)->first();
        return view('livrogabrielas.show', [
            'livrogabriela' => $livrogabriela,
        ]);
    }
}
