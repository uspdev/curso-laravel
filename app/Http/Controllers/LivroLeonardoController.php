<?php

namespace App\Http\Controllers;

use App\Models\LivroLeonardo;
use Illuminate\Http\Request;

class LivroLeonardoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroLeonardo::all();
        return view('livros-leonardo.index', ['livros' => $livros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros-leonardo.create', ['livro' => new LivroLeonardo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livro = new LivroLeonardo;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect("/livros_leonardo/{$livro->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroLeonardo  $livroLeonardo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = LivroLeonardo::find($id);
        return view('livros-leonardo.show', ['livro' => $livro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroLeonardo  $livroLeonardo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = LivroLeonardo::find($id);
        return view('livros-leonardo.edit', ['livro' => $livro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroLeonardo  $livroLeonardo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $livro = LivroLeonardo::find($id);
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect("/livros_leonardo/{$livro->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroLeonardo  $livroLeonardo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = LivroLeonardo::find($id);
        $livro->delete();
        return redirect('/livros_leonardo');
    }
}
