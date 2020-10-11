<?php

namespace App\Http\Controllers;

use App\Models\LivroMarceloDaudt;
use Illuminate\Http\Request;

class LivroMarceloDaudtController extends Controller
{

    public function index(){
        $livros = LivroMarceloDaudt::all();
        return view('livros_marcelo_daudt.index',[
            'livrosMarceloDaudt' => $livros
        ]);
    }

    public function show(LivroMarceloDaudt $livros)
    {
        return view('livros_marcelo_daudt.show',[
            'livrosMarceloDaudt' => $livros
        ]);
    }

}
