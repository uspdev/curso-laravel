<?php

namespace App\Http\Controllers;

use App\Models\LivroWill;
use Illuminate\Http\Request;

class LivroWillController extends Controller
{
    public function index()
    {
        $livros = LivroWill::all();
        return view('livro_wills.index', compact('livros'));
    }

    public function show(LivroWill $livro)
    {
        return view('livro_wills.show', compact('livro'));
    }
}
