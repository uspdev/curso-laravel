<?php

namespace App\Http\Controllers;

use App\Models\LivroEdmar;
use Illuminate\Http\Request;

class LivroEdmarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroEdmar::all();
        return view('livro_edmar.index',[
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
        return view('livro_edmar.create',[
            'livroedmar' => new LivroEdmar
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
        $livroEdmar = new LivroEdmar;
        $livroEdmar->titulo = $request->titulo;
        $livroEdmar->autor = $request->autor;
        $livroEdmar->isbn = $request->isbn;
        $livroEdmar->save();
        return redirect("/livroedmar/{$livroEdmar->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroEdmar  $livroEdmar
     * @return \Illuminate\Http\Response
     */
    public function show(LivroEdmar $livroedmar)
    {
        return view('livro_edmar.show',[
            'livroedmar' => $livroedmar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroEdmar  $livroEdmar
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroEdmar $livroedmar)
    {
        return view('livro_edmar.edit',[
            'livroedmar' => $livroedmar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroEdmar  $livroEdmar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroEdmar $livroedmar)
    {
        $livroedmar->titulo = $request->titulo;
        $livroedmar->autor = $request->autor;
        $livroedmar->isbn = $request->isbn;
        $livroedmar->save();
        return redirect("/livroedmar/{$livroedmar->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroEdmar  $livroEdmar
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroEdmar $livroedmar)
    {
        $livroedmar->delete();
        return redirect('/livroedmar');
    }
}
