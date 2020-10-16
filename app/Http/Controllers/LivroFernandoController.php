<?php

namespace App\Http\Controllers;

use App\Models\LivroFernando;
use Illuminate\Http\Request;

class LivroFernandoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroFernando::all();
        return view('livros_fernando.index', [
            'livros' => $livros,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros_fernando.create',[
            'livro' => new LivroFernando
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livro = new LivroFernando;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        //return redirect("/livros_fernando/{$livro->id}");
        return redirect("/livros_fernando");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroFernando  $livroFernando
     * @return \Illuminate\Http\Response
     */
    public function show(LivroFernando $livros_fernando)
    {
        return view('livros_fernando.show', [
            'livro' => $livros_fernando
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroFernando  $livroFernando
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroFernando $livros_fernando)
    {   
        return view('livros_fernando.edit', [
            'livro' => $livros_fernando
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroFernando  $livroFernando
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroFernando $livros_fernando)
    {
        $livros_fernando->titulo = $request->titulo;
        $livros_fernando->autor = $request->autor;
        $livros_fernando->isbn = $request->isbn;
        $livros_fernando->save();
        return redirect("/livros_fernando/{$livro->id}");
        //return redirect("/livros_fernando");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroFernando  $livroFernando
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroFernando $livros_fernando)
    {
        $livros_fernando->delete();
        return redirect("/livros_fernando");
    }
}
