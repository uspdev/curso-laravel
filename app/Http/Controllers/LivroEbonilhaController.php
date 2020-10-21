<?php

namespace App\Http\Controllers;

use App\Models\LivroEbonilha;
use Illuminate\Http\Request;

class LivroEbonilhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livrosEbonilha = LivroEbonilha::all();
        return view('livro_ebonilha.index', [
            'livrosEbonilha' => $livrosEbonilha
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livro_ebonilha.create',[
            'livros_ebonilha' => new LivroEbonilha(),
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
        $livro = new LivroEbonilha;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect("/livros_ebonilha/{$livro->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroEbonilha  $livroEbonilha
     * @return \Illuminate\Http\Response
     */
    public function show(LivroEbonilha $livros_ebonilha)
    {
        return view('livro_ebonilha.show', [
            'livros_ebonilha' => $livros_ebonilha
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroEbonilha  $livroEbonilha
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroEbonilha $livros_ebonilha)
    {
        return view('livro_ebonilha.edit', [
            'livros_ebonilha' => $livros_ebonilha
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroEbonilha  $livroEbonilha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroEbonilha $livros_ebonilha)
    {
        $livros_ebonilha->titulo = $request->titulo;
        $livros_ebonilha->autor = $request->autor;
        $livros_ebonilha->isbn = $request->isbn;
        $livros_ebonilha->save();
        return redirect("/livros_ebonilha/{$livros_ebonilha->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroEbonilha  $livroEbonilha
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroEbonilha $livros_ebonilha)
    {
        $livros_ebonilha->delete();
        return redirect('/livros_ebonilha');
    }
}
