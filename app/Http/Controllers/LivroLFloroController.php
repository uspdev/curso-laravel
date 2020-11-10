<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroLFloroRequest;
use App\Models\LivroLFloro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

//use Illuminate\Support\Facades\Validator;

class LivroLFloroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->search)) {
            $livros = LivroLFloro::where('autor', 'LIKE', "%{$request->search}%")
                ->orWhere('titulo', 'LIKE', "%{$request->search}%")->paginate(5);
        } else {
            $livros = LivroLFloro::paginate(5);
        }

        return view('livroslfloro.index', [
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
        Gate::authorize('admin');
        return view('livroslfloro.create', [
            'livro' => new LivroLFloro
        ]);
    }

    /**
     * Grava um recurso novo para LivroLFloro no bancdo
     *
     * @param  LivroLFloroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivroLFloroRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $livro = LivroLFloro::create($validated);
        request()->session()->flash('alert-info', 'Livro cadastrado com sucesso!');
        return redirect("/livroslfloro/{$livro->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  LivroLFloro  $livroslfloro
     * @return \Illuminate\Http\Response
     */
    public function show(LivroLFloro $livroslfloro)
    {
        return view('livroslfloro.show', [
            'livro' => $livroslfloro
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  LivroLFloro  $livroslfloro
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroLFloro $livroslfloro)
    {
        Gate::authorize('admin');
        return view('livroslfloro.edit', [
            'livro' => $livroslfloro
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroLFloro  $livroLFloro
     * @return \Illuminate\Http\Response
     */
    public function update(LivroLFloroRequest $request, LivroLFloro $livroslfloro)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $livroslfloro->update($validated);
        request()->session()->flash('alert-info', 'Livro atualizado com sucesso!');
        return redirect("/livroslfloro/{$livroslfloro->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $livroLFloro
     * @return \Illuminate\Http\Response
     */
    public function destroy($livroId)
    {
        Gate::authorize('admin');
        $livro = LivroLFloro::find($livroId);
        $livro->delete();
        return redirect('/livroslfloro');
    }
}
