<?php

namespace App\Http\Controllers;

use App\Models\LivroGabriela;
use Illuminate\Http\Request;
use App\Http\Requests\LivroGabrielaRequest;

class LivroGabrielaController extends Controller
{
    public function index()
    {
        $livrogabrielas = LivroGabriela::all();
        return view('livrogabrielas.index',[
            'livrogabrielas' => $livrogabrielas
        ]);
    }
    
    public function create()
    {
        return view('livrogabrielas.create', [
            'livrogabriela' => new LivroGabriela
        ]);
    }
    
    public function store(LivroGabrielaRequest $request)
    {   
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $livrogabriela = LivroGabriela::create($validated);
        
        return redirect("/livrogabrielas/{$livrogabriela->id}");
    }
    
    public function show(LivroGabriela $livrogabriela)
    {
        return view('livrogabrielas.show', [
            'livrogabriela' => $livrogabriela,
        ]);
    }
    
    public function edit(LivroGabriela $livrogabriela)
    {   
        return view('livrogabrielas.edit', [
            'livrogabriela' => $livrogabriela
        ]);
    }
    
    public function update(LivroGabrielaRequest $request, LivroGabriela $livrogabriela)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $livrogabriela->update($validated);
        request()->session()->flash('alert-info','Livro atualizado com sucesso');
        return redirect("/livrogabrielas/{$livrogabriela->id}");
    }
    
    public function destroy(LivroGabriela $livrogabriela)
    {
        $livrogabriela->delete();
        return redirect("/livrogabrielas");
    }
}
