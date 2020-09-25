<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroVictor;

class LivroVictorController extends Controller
{
    public function index(){
        $livrosvictor = LivroVictor::all();
        return view('livrosvictor.index',[
            'livrosvictor' => $livrosvictor
        ]);
    }

    public function show($isbn){
        $livrovictor = LivroVictor::where('isbn',$isbn)->first();
        return view('livrosvictor.show',[
            'livrovictor' => $livrovictor
        ]);
    }
}
