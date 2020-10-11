<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livrofabi;

class LivroFabiController extends Controller
{
    public function index(){
        $livrofabis = Livrofabi::all();
        return view('livrosfabi.index',[
            'livrofabis' => $livrofabis
        ]);
    }

    public function show($isbn){
        $livrofabi = Livrofabi::where('isbn',$isbn)->first();
        return view('livrosfabi.show',[
            'livrofabi' => $livrofabi
        ]);
    }
}
