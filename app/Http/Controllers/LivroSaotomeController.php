<?php

namespace App\Http\Controllers;

use App\Models\LivroSaotome;
use Illuminate\Http\Request;

class LivroSaotomeController extends Controller
{
    public function index(){
        $livrosSaotome = LivroSaotome::all();
        return view('livrossaotome.index',[
            'livrosSaotome' => $livrosSaotome
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('livrossaotome.create', [
            'livroSaotome' => new LivroSaotome
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
        $livroSaotome = new LivroSaotome;
        $livroSaotome->titulo = $request->titulo;
        $livroSaotome->autor = $request->autor;
        $livroSaotome->isbn = $request->isbn;
        $livroSaotome->save();
        # return redirect("/livrossaotome/{$livroSaotome->id}");
        return redirect("/livrossaotome");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroSaotome  $livroSaotome
     * @return \Illuminate\Http\Response
     */
    public function show(LivroSaotome $livrossaotome){
        return view('livrossaotome.show',[
            'livroSaotome' => $livrossaotome,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroSaotome  $livroSaotome
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroSaotome $livrossaotome) // especificamente este precisa ser o mesmo nome da rota
    {
        return view('livrossaotome.edit', [
            'livroSaotome' => $livrossaotome
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroSaotome  $livroSaotome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroSaotome $livrossaotome)
    {
        $livrossaotome->titulo = $request->titulo;
        $livrossaotome->autor = $request->autor;
        $livrossaotome->isbn = $request->isbn;
        $livrossaotome->save();
        return redirect("/livrossaotome/{$livrossaotome->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroSaotome  $livroSaotome
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroSaotome $livrossaotome)
    {
        $livrossaotome->delete();
        return redirect("/livrossaotome");
    }
}
