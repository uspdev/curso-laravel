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
     * @param LivroAlessandroOliveira $livro
     * @return \Illuminate\Http\Response
     */
    public function show($livro)
    {
        $livro = LivroAlessandroOliveira::find($livro);
        return view('livros_alessandrooliveira.show', [
            'livro' => $livro,
        ]);
    }

    /**
     * Create resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros_alessandrooliveira.create',[
            'livro' => new LivroAlessandroOliveira,
        ]);
    }
    
    /**
     * Store resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livro = new LivroAlessandroOliveira;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect("/livros_alessandrooliveira/{$livro->id}");
    }

    /**
     * Edit the specified resource.
     *
     * @param LivroAlessandroOliveira $livro
     * @return \Illuminate\Http\Response
     */    
    public function edit(LivroAlessandroOliveira $livro)
    {
        return view('livros_alessandrooliveira.edit',[
            'livro' => $livro
        ]);
    }
    
    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param LivroAlessandroOliveira $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroAlessandroOliveira $livro)
    {
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect("/livros_alessandrooliveira/{$livro->id}");
    }
    
    /**
     * Destroy the specified resource.
     *
     * @param LivroAlessandroOliveira $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroAlessandroOliveira $livro)
    {
        $livro->delete();
        return redirect('/livros_alessandrooliveira');
    }

}
