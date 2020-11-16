<?php

namespace App\Http\Controllers;

use App\Models\LivroGabriela;
use Illuminate\Http\Request;
use App\Http\Requests\LivroGabrielaRequest;

class LivroGabrielaController extends Controller
{
    public function index(Request $request)
    {
        if(isset($request->search)){
            $livrogabrielas = LivroGabriela::where('autor', 'LIKE', "%{$request->search}%")
                                             ->orWhere('titulo', 'LIKE', "%{$request->search}%")->paginate(5);            
        } else{
            $livrogabrielas = LivroGabriela::paginate(5);
        }

        return view('livrogabrielas.index',[
            'livrogabrielas' => $livrogabrielas
        ]);
    }
    
    public function create()
    {
        $this->authorize('admin');
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
        $this->authorize('admin');
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
        $this->authorize('admin');
        $livrogabriela->delete();
        return redirect("/livrogabrielas");
    }
}
