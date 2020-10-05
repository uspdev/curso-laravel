<?php

namespace App\Http\Controllers;

use App\Models\LivroGabriela;
use Illuminate\Http\Request;

class LivroGabrielaController extends Controller
{
    public function index()
    {
        $livrogabrielas = LivroGabriela::all();
        return view('livrogabrielas.index',[
            'livrogabrielas' => $livrogabrielas
        ]);
    }
    
    public function create()
    {
        return view('livrogabrielas.create', [
            'livrogabriela' => new LivroGabriela
        ]);
    }
    
    public function store(Request $request)
    {
        $livrogabriela = new LivroGabriela;
        $livrogabriela->titulo = $request->titulo;
        $livrogabriela->autor = $request->autor;
        $livrogabriela->isbn = $request->isbn;
        $livrogabriela->save();
        return redirect("/livrogabrielas");
    }
    
    public function show(LivroGabriela $livrogabriela)
    {
        return view('livrogabrielas.show', [
            'livrogabriela' => $livrogabriela,
        ]);
    }
    
    public function edit(LivroGabriela $livrogabriela)
    {
        return view('livrogabrielas.edit', [
            'livrogabriela' => $livrogabriela
        ]);
    }
    
    public function update(Request $request, LivroGabriela $livrogabriela)
    {
        $livrogabriela->titulo = $request->titulo;
        $livrogabriela->autor = $request->autor;
        $livrogabriela->isbn = $request->isbn;
        $livrogabriela->save();
        return redirect("/livrogabrielas");
    }
    
    public function destroy(LivroGabriela $livrogabriela)
    {
        $livrogabriela->delete();
        return redirect("/livrogabrielas");
    }
}
