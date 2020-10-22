<?php

namespace App\Http\Controllers;

use App\Models\LivroAlessandroOliveira;
use Illuminate\Http\Request;
use App\Http\Requests\LivroAlessandroOliveiraRequest;

class LivroAlessandroOliveiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroAlessandroOliveira::all();
        return view('livros_alessandrooliveira.index', [
            'livros' => $livros
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param LivroAlessandroOliveira $livros_alessandrooliveira
     * @return \Illuminate\Http\Response
     */
    public function show(LivroAlessandroOliveira $livros_alessandrooliveira)
    {
        return view('livros_alessandrooliveira.show', [
            'livro' => $livros_alessandrooliveira,
        ]);
    }

    /**
     * Create resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros_alessandrooliveira.create',[
            'livro' => new LivroAlessandroOliveira,
        ]);
    }
    
    /**
     * Store resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivroAlessandroOliveiraRequest $request)
    {
        $validated = $request->validated();
        request()->session()->flash('alert-info', 'Livro cadastrado com sucesso!');
        $livro = LivroAlessandroOliveira::create($validated);
        return redirect("/livros_alessandrooliveira/{$livro->id}");
    }

    /**
     * Edit the specified resource.
     *
     * @param LivroAlessandroOliveira $livros_alessandrooliveira
     * @return \Illuminate\Http\Response
     */    
    public function edit(LivroAlessandroOliveira $livros_alessandrooliveira)
    {
        return view('livros_alessandrooliveira.edit',[
            'livro' => $livros_alessandrooliveira
        ]);
    }
    
    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param LivroAlessandroOliveira $livros_alessandrooliveira
     * @return \Illuminate\Http\Response
     */
    public function update(LivroAlessandroOliveiraRequest $request, LivroAlessandroOliveira $livros_alessandrooliveira)
    {
        $validated = $request->validated();
        $livros_alessandrooliveira->update($validated);
        request()->session()->flash('alert-info', 'Livro atualizado com sucesso!');
        return redirect("/livros_alessandrooliveira/{$livros_alessandrooliveira->id}");
    }
    
    /**
     * Destroy the specified resource.
     *
     * @param LivroAlessandroOliveira $livros_alessandrooliveira
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroAlessandroOliveira $livros_alessandrooliveira)
    {
        $livros_alessandrooliveira->delete();
        return redirect('/livros_alessandrooliveira');
    }

}
