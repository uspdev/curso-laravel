<?php

namespace App\Http\Controllers;

use App\Models\LivroRicardo;
use Illuminate\Http\Request;
use App\Http\Requests\LivroRicardoRequest;


class LivroRicardoController extends Controller
{
   
    public function index(Request $request)
    {
        if(isset(request()->search)){
            $livros = Livroricardo::where('autor', 'LIKE', "%{$request->search}%")
                                    ->orWhere('titulo', 'LIKE', "%{$request->search}%")->paginate(5);
        }else{
            $livros = Livroricardo::paginate(5);
        }
        return view('livros-ricardo.index',[
            'livros' => $livros
        ]);
    }

    public function create()
    {
        $this->authorize('admin');
        return view('livros-ricardo.create',[
            'livro' => new LivroRicardo
        ]);
    }

    public function store(LivroRicardoRequest $request)
    {
        $validated = $request->validated(); //pega somente os campos validados, que estão dentro da rules
        if(auth()->user() != null)
            $validated['user_id'] = auth()->user()->id;
        $livro = LivroRicardo::create($validated);
        request()->session()->flash('alert-success','Livro cadastrado com sucesso');
        return redirect("/livros-ricardo");
        
    }

    public function show($id)
    {
        $livro = LivroRicardo::where('id',$id)->first();
        return view('livros-ricardo.show',[
            'livro' => $livro,
        ]);
    }

    
    public function edit(LivroRicardo $livros_ricardo)
    {
        return view('livros-ricardo.edit', [
            'livro' => $livros_ricardo
        ]);
    }
    

    public function update(LivroRicardoRequest $request, LivroRicardo $livros_ricardo)
    {
        $this->authorize('admin');
        $validated = $request->validated();
        if(auth()->user() != null)
            $validated['user_id'] = auth()->user()->id;
        $livros_ricardo->update($validated);
        request()->session()->flash('alert-success','Livro atualizado com sucesso');
        return redirect("/livros-ricardo/{$livros_ricardo->id}");
    }

    public function destroy(LivroRicardo $livros_ricardo)
    {
        $this->authorize('admin');
        $livros_ricardo->delete();
        return redirect('/livros-ricardo');
    }
}
