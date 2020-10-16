<?php

namespace App\Http\Controllers;

use App\Models\LivroDaniel;
use Illuminate\Http\Request;

class LivroDanielController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroDaniel::all();
        return view('livros_daniel.index', [
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
        return view('livros_daniel.create', [
            'livro' => new LivroDaniel
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
        $livro = new LivroDaniel;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect('livros_daniel/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroDaniel  $livroDaniel
     * @return \Illuminate\Http\Response
     */
    public function show(LivroDaniel $livros_daniel)
    {
        return view('livros_daniel.show', [
            'livro' => $livros_daniel,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroDaniel  $livroDaniel
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroDaniel $livros_daniel)
    {
        return view('livros_daniel.edit', [
            'livro' => $livros_daniel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroDaniel  $livroDaniel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroDaniel $livros_daniel)
    {
        $livros_daniel->titulo = $request->titulo;
        $livros_daniel->autor = $request->autor;
        $livros_daniel->isbn = $request->isbn;
        $livros_daniel->save();
        return redirect('livros_daniel/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroDaniel  $livroDaniel
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroDaniel $livros_daniel)
    {
        $livros_daniel->delete();
        return redirect('livros_daniel');
    }

}
