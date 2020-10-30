<?php

namespace App\Http\Controllers;

use App\Models\LivroCelso;
use Illuminate\Http\Request;
use App\Http\Requests\LivroCelsoRequest;

class LivroCelsoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroCelso::all();
        return view('livro_celsos.index', [
            'livros' => $livros,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livro_celsos.create', [
            'livro' => new LivroCelso
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivroCelsoRequest $request)
    {
        $validated = $request->validated();
        $livro = LivroCelso::create($validated);        
        request()->session()->flash('alert-info','Livro cadastrado com sucesso');
        return redirect("/livro_celsos/{$livro->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroCelso  $livroCelso
     * @return \Illuminate\Http\Response
     */
    public function show(LivroCelso $livroCelso)
    {
        return view('livro_celsos.show', [
            'livro' => $livroCelso,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroCelso  $livroCelso
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroCelso $livroCelso)
    {
        return view('livro_celsos.edit',[
            'livro' => $livroCelso
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroCelso  $livroCelso
     * @return \Illuminate\Http\Response
     */
    public function update(LivroCelsoRequest $request, LivroCelso $livroCelso)
    {
        $validated = $request->validated();
        $livroCelso->update($validated);
        request()->session()->flash('alert-info','Livro atualizado com sucesso');
        return redirect("/livro_celsos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroCelso  $livroCelso
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroCelso $livroCelso)
    {
        $livroCelso->delete();
        return redirect('/livro_celsos');
    }
}
