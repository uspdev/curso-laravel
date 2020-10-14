<?php

namespace App\Http\Controllers;

use App\Models\LivroLFloro;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;

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
        return view('livroslfloro.create', [
            'livro' => new LivroLFloro
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
            'isbn' => 'required'
        ]);

        $livro = new LivroLFloro;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect("/livroslfloro/{$livro->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  string $livroLFloro
     * @return \Illuminate\Http\Response
     */
    public function show($livroId)
    {
        $livro = LivroLFloro::find($livroId);
        return view('livroslfloro.show', [
            'livro' => $livro
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $livroId
     * @return \Illuminate\Http\Response
     */
    public function edit($livroId)
    {
        $livro = LivroLFloro::find($livroId);
        return view('livroslfloro.edit', [
            'livro' => $livro
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroLFloro  $livroLFloro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $livroId)
    {
        $livro = LivroLFloro::find($livroId);
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect("/livroslfloro/{$livro->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $livroLFloro
     * @return \Illuminate\Http\Response
     */
    public function destroy($livroId)
    {
        $livro = LivroLFloro::find($livroId);
        $livro->delete();
        return redirect('/livroslfloro');
    }
}
