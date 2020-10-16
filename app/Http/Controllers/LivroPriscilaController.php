<?php

namespace App\Http\Controllers;

use App\Models\LivroPriscila;
use Illuminate\Http\Request;

class LivroPriscilaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroPriscila::all();
        return view('livro_priscilas.index', [
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
        return view('livro_priscilas.create',[
            'livros' => new LivroPriscila
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
        $livroPriscila = new LivroPriscila;
        $livroPriscila->titulo = $request->titulo;
        $livroPriscila->autor = $request->autor;
        $livroPriscila->isbn = $request->isbn;
        $livroPriscila->save();
        return view('livro_priscilas.show', [
            'livro' => $livroPriscila,
            'listar' => 1
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroPriscila  $livroPriscila
     * @return \Illuminate\Http\Response
     */
    public function show(LivroPriscila $livroPriscila)
    {
        $livro = LivroPriscila::where('id',$livroPriscila->id);

        return view('livro_priscilas.show', [
            'livro' => $livro
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroPriscila  $livroPriscila
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroPriscila $livroPriscila)
    {

        return view('livro_priscilas.edit',[
            'livro' => $livroPriscila
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroPriscila  $livroPriscila
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroPriscila $livroPriscila)
    {
        $livroPriscila->titulo = $request->titulo;
        $livroPriscila->autor = $request->autor;
        $livroPriscila->isbn = $request->isbn;
        $livroPriscila->save();
        return view('livro_priscilas.show', [
            'livro' => $livroPriscila,
            'listar' => 1
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroPriscila  $livroPriscila
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroPriscila $livroPriscila)
    {
        $livroPriscila->delete();
        return view('livro_priscilas.show', [
            'livro' => $livroPriscila,
            'apagado' => 1,
            'listar' => 1
        ]);
    }
}
