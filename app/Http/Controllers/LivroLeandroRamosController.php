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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroLeandroRamos  $livroLeandroRamos
     * @return \Illuminate\Http\Response
     */
    public function show(LivroLeandroRamos $livroLeandroRamos)
    {
        $livro = LivroLeandroRamos::where('isbn', $isbn)->first();
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
    public function edit(LivroLeandroRamos $livroLeandroRamos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroLeandroRamos  $livroLeandroRamos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroLeandroRamos $livroLeandroRamos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroLeandroRamos  $livroLeandroRamos
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroLeandroRamos $livroLeandroRamos)
    {
        //
    }
}
