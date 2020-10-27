<?php

namespace App\Http\Controllers;

use App\Models\LivroDaniel;
use Illuminate\Http\Request;
use \App\Http\Requests\LivroDanielRequest;
use Auth;

class LivroDanielController extends Controller
{

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
    public function store(LivroDanielRequest $request)
    {
        // o método validated retorna somente os valores que passaram
        // pela validação do Request LivroDanielRequest
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $livro = LivroDaniel::create($validated);
        // Define sessão flash para exibição de mensagem na View
        request()->session()->flash('alert-info', 'Livro cadastrado com sucesso');
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
    public function update(LivroDanielRequest $request, LivroDaniel $livros_daniel)
    {

        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $livros_daniel->update($validated);
        request()->session()->flash('alert-info', 'Livro atualizado com sucesso');
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
