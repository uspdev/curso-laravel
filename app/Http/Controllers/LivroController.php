<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros =  Livro::all();
        return view('livros.index',[
            'livros' => $livros
        ]);
    }
    
    public function create()
    {
        return view('livros.create',[
            'livro' => new Livro,
        ]);
    }
    
    public function store(Request $request)
    {
        $livro = new Livro;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect("/livros/{$livro->id}");
    }
    
    public function show(Livro $livro)
    {
        return view('livros.show',[
            'livro' => $livro
        ]);
    }
    
    public function edit(Livro $livro)
    {
        return view('livros.edit',[
            'livro' => $livro
        ]);
    }
    
    public function update(Request $request, Livro $livro)
    {
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect("/livros/{$livro->id}");
    }
    
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect('/livros');
    }
}
