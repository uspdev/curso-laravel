<?php

namespace App\Http\Controllers;

use App\Models\LivroRicardo;
use Illuminate\Http\Request;

class LivroRicardoController extends Controller
{
   
    public function index()
    {
        $livros = Livroricardo::all();
        return view('livros-ricardo.index',[
            'livros' => $livros
        ]);
    }

    public function create()
    {
        return view('livros-ricardo.create',[
            'livro' => new LivroRicardo
        ]);
    }

    public function store(Request $request)
    {
        
        $livro = new LivroRicardo;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        #return redirect("/livros-ricardo/{$livro->id}");
        return redirect("/livros-ricardo");
        
    }

    public function show($id)
    {
        $livro = LivroRicardo::where('id',$id)->first();
        return view('livros-ricardo.show',[
            'livro' => $livro,
        ]);
    }

    
    public function edit(LivroRicardo $livros_ricardo)
    {
        return view('livros-ricardo.edit', [
            'livro' => $livros_ricardo
        ]);
    }
    

    public function update(Request $request, LivroRicardo $livros_ricardo)
    {
        $livros_ricardo->titulo = $request->titulo;
        $livros_ricardo->autor = $request->autor;
        $livros_ricardo->isbn = $request->isbn;
        $livros_ricardo->save();
        return redirect("/livros-ricardo/{$livros_ricardo->id}");
    }

    public function destroy(LivroRicardo $livros_ricardo)
    {
        $livros_ricardo->delete();
        return redirect('/livros-ricardo');
    }
}
