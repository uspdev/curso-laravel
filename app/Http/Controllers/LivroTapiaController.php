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

    public function create()
    {
        return view('livrotapia.create', [
            'livro' => new LivroTapia,
        ]);
    }

    public function edit(LivroTapia $livrostapium)
    {        
        return view('livrotapia.edit', [
             'livro' => $livrostapium
        ]);
    }

    public function store(Request $request)
    {
        $livro = new LivroTapia;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect("/livrostapia/{$livro->id}");
    }

    public function show(LivroTapia $livrostapium) {
    //public function show($isbn) {
        // $livro = LivroTapia::Where('isbn', $isbn)->first();        
        return view('livrotapia.show', [
            'livro' => $livrostapium,
        ]);
    }

    public function update(Request $request, LivroTapia $livrostapium)
    {
        $livrostapium->titulo = $request->titulo;
        $livrostapium->autor = $request->autor;
        $livrostapium->isbn = $request->isbn;
        $livrostapium->save();
        return redirect("/livrostapia/{$livrostapium->id}");
    }

    public function destroy(LivroTapia $livrostapium)
    {
        $livrostapium->delete();
        return redirect('/livrostapia');
    }
}
