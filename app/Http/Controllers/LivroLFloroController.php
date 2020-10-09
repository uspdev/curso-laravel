<?php

namespace App\Http\Controllers;

use App\Models\LivroLFloro;
use Illuminate\Http\Request;

class LivroLFloroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroLFloro::all();
        return view('livroslfloro.index', [
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
     * @param  \App\Models\LivroLFloro  $livroLFloro
     * @return \Illuminate\Http\Response
     */
    public function show(LivroLFloro $livro)
    {
        $livro = LivroLFloro::where('isbn', $isbn)->first();

        return view('livroslfloro.show', [
            'livro' => $livro
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroLFloro  $livroLFloro
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroLFloro $livroLFloro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroLFloro  $livroLFloro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroLFloro $livroLFloro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroLFloro  $livroLFloro
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroLFloro $livroLFloro)
    {
        //
    }
}
