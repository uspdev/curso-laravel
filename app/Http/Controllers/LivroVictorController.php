<?php

namespace App\Http\Controllers;

use App\Models\LivroVictor;
use Illuminate\Http\Request;
use App\Http\Requests\LivroVictorRequest;

class LivroVictorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livrosvictor = LivroVictor::all();
        return view('livrosvictor.index',[
            'livrosvictor' => $livrosvictor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $livrosvictor = new LivroVictor;
        return view('livrosvictor.create', compact('livrosvictor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivroVictorRequest $request)
    {
        $validated = $request->validated();
        $livrosvictor = LivroVictor::create($validated);
        request()->session()->flash('alert-info','Livro cadastrado com sucesso');
        return redirect("/livrosvictor/{$livrosvictor->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroVictor  $livroVictor
     * @return \Illuminate\Http\Response
     */
    public function show(LivroVictor $livrosvictor)
    {
        return view('livrosvictor.show', ['livrovictor' => $livrosvictor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroVictor  $livroVictor
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroVictor $livrosvictor)
    {
        return view('livrosvictor.edit', ['livrosvictor' => $livrosvictor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroVictor  $livroVictor
     * @return \Illuminate\Http\Response
     */
    public function update(LivroVictorRequest $request, LivroVictor $livrosvictor)
    {
        $validated = $request->validated();
        $livrosvictor->update($validated);
        request()->session()->flash('alert-info','Livro atualizado com sucesso');
        return redirect("/livrosvictor/{$livrosvictor->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroVictor  $livroVictor
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroVictor $livrosvictor)
    {
        $livrosvictor->delete();
        return redirect("/livrosvictor");
    }
}
