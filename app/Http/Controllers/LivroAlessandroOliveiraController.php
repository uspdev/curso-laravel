<?php

namespace App\Http\Controllers;

use App\Models\LivroAlessandroOliveira;
use Illuminate\Http\Request;

class LivroAlessandroOliveiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroAlessandroOliveira::all();
        return view('livros_alessandrooliveira.index', [
            'livros' => $livros
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param $livro
     * @return \Illuminate\Http\Response
     */
    public function show($livro)
    {
        $livro = LivroAlessandroOliveira::where('isbn', $livro)->first();
        return view('livros_alessandrooliveira.show', [
            'livro' => $livro,
        ]);
    }
}
