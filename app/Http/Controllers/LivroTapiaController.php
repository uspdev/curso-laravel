<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroTapia;

class LivroTapiaController extends Controller
{
    public function index() {
        $livros = LivroTapia::all();
        return view('livrotapia.index', [
            'livros' => $livros
        ]);
    }

    public function show($isbn) {

        $livro = LivroTapia::Where('isbn', $isbn)->first();

        return view('livrotapia.show', [
            'livro' => $livro,
        ]);
    }
}
