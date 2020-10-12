<?php

namespace App\Http\Controllers;

use App\Models\LivroLeandroRamos;
use Illuminate\Http\Request;

class LivroLeandroRamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroLeandroRamos::all();
        return view('livros_leandroramos.index',[
            'livros' => $livros
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros_leandroramos.create', [
            'livro' => new LivroLeandroRamos,
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
        $request->validate([
          'titulo' => 'required',
          'autor' => 'required',
          'isbn' => 'required|integer',
        ]);
        
        $livro = LivroLeandroRamos::create($request->all());
        
        return redirect("/livros_leandroramos/{$livro->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroLeandroRamos  $livroLeandroRamos
     * @return \Illuminate\Http\Response
     */
    public function show(LivroLeandroRamos $livro)
    {
        return view('livros_leandroramos.show', [
            'livro' => $livro,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroLeandroRamos  $livroLeandroRamos
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroLeandroRamos $livro)
    {
        return view('livros_leandroramos.edit', [
            'livro' => $livro,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroLeandroRamos  $livroLeandroRamos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroLeandroRamos $livro)
    {
        $request->validate([
          'titulo' => 'required',
          'autor' => 'required',
          'isbn' => 'required|integer',
        ]);
        
        $livro->update($request->all());
        
        return redirect("/livros_leandroramos/{$livro->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroLeandroRamos  $livroLeandroRamos
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroLeandroRamos $livro)
    {
        $livro->delete();
        return redirect('/livros_leandroramos');
    }
}
