<?php

namespace App\Http\Controllers;

use App\Models\LivroLau;
use Illuminate\Http\Request;

class LivroLauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livrolaus = LivroLau::all();
        return view('livrosLau.index', [
            'livrolaus' => $livrolaus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livrosLau.create',[
            'livrolau' => new LivroLau
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
        $livrolau = new LivroLau;
        $livrolau->titulo = $request->titulo;
        $livrolau->autor = $request->autor;
        $livrolau->isbn = $request->isbn;
        $livrolau->save();
        return redirect("/livros_lau");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroLau  $livrolau
     * @return \Illuminate\Http\Response
     */
    public function show(LivroLau $livrolau)
    {
        return view('livrosLau.show', ['livrolau' => $livrolau]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroLau  $livrolau
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroLau $livrolau)
    {
        return view('livrosLau.edit',[
            'livrolau' => $livrolau
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroLau  $livrolau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroLau $livrolau)
    {
        $livrolau->titulo = $request->titulo;
        $livrolau->autor = $request->autor;
        $livrolau->isbn = $request->isbn;
        $livrolau->update();
        return redirect("/livros_lau/{$livrolau->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroLau  $livrolau
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroLau $livrolau)
    {
        $livrolau->delete();
        return redirect('/livros_lau');
    }
}
