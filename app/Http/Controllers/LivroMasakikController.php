<?php

namespace App\Http\Controllers;
use App\Models\Livromasakik;

use Illuminate\Http\Request;

class LivroMasakikController extends Controller
{
    public function index()
    {
        $livros = Livromasakik::all();
        return view('livrosmasakik.index',[
            'livrosmasakik' => $livros
        ]);
    }

    public function create()
    {
        // 
        return view('livrosmasakik.create', [
            'livromasakik' => new Livromasakik
        ]);
    }

    public function store(Request $request)
    {
        $livromasakik = new Livromasakik;
        $livromasakik->titulo = $request->titulo;
        $livromasakik->autor = $request->autor;
        $livromasakik->isbn = $request->isbn;
        $livromasakik->save();
        # return redirect("/livrosmasakik/{$livromasakik->id}");
        return redirect("/livrosmasakik");
    }

    public function show(Livromasakik $livrosmasakik){
        return view('livrosmasakik.show',[
            'livromasakik' => $livrosmasakik,
        ]);
    }

    public function edit(Livromasakik $livrosmasakik) // especificamente este precisa ser o mesmo nome da rota
    {
        return view('livrosmasakik.edit', [
            'livromasakik' => $livrosmasakik
        ]);
    }

    public function update(Request $request, Livromasakik $livrosmasakik)
    {
        $livrosmasakik->titulo = $request->titulo;
        $livrosmasakik->autor = $request->autor;
        $livrosmasakik->isbn = $request->isbn;
        $livrosmasakik->save();
        return redirect("/livrosmasakik/{$livrosmasakik->id}");
    }

    public function destroy(Livromasakik $livrosmasakik)
    {
        $livrosmasakik->delete();
        return redirect("/livrosmasakik");
    }

}
