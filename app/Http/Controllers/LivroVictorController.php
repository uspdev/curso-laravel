<?php

namespace App\Http\Controllers;

use App\Models\LivroVictor;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $livrosvictor = new LivroVictor;
        $livrosvictor->titulo = $request->titulo;
        $livrosvictor->autor = $request->autor;
        $livrosvictor->isbn = $request->isbn;
        $livrosvictor->save();
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
    public function update(Request $request, LivroVictor $livrosvictor)
    {
        $livrosvictor->titulo = $request->titulo;
        $livrosvictor->autor = $request->autor;
        $livrosvictor->isbn = $request->isbn;
        $livrosvictor->update();
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
