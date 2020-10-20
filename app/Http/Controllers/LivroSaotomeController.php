<?php

namespace App\Http\Controllers;

use App\Models\LivroSaotome;
use Illuminate\Http\Request;
use App\Http\Requests\LivroSaotomeRequest;

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
    public function store(LivroSaotomeRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $livroSaotome = LivroSaotome::create($validated);
        request()->session()->flash('alert-info', 'Livro cadastrado com sucesso');
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
    public function update(LivroSaotomeRequest $request, LivroSaotome $livrossaotome)
    {   
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $livrossaotome->update($validated);
        request()->session()->flash('alert-info', 'Livro atualizado com sucesso');
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
