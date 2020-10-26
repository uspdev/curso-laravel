<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroTapia;
use App\Http\Requests\LivroTapiaRequest;

class LivroTapiaController extends Controller
{
    public function index() {
        $livros = LivroTapia::all();
        return view('livrotapia.index', [
            'livros' => $livros
        ]);
    }

    public function create()
    {
        return view('livrotapia.create', [
            'livro' => new LivroTapia,
        ]);
    }

    public function edit(LivroTapia $livrostapium)
    {        
        return view('livrotapia.edit', [
             'livro' => $livrostapium
        ]);
    }

    //public function store(Request $request)
    public function store(LivroTapiaRequest $request)
    {
        // $request->validate([
        //     'titulo' => 'required',
        //     'autor' => 'required',
        //     'isbn' => 'required|integer',
        // ]);

        //$livro = new LivroTapia;
        //$livro->titulo = $request->titulo;
        //$livro->autor = $request->autor;
        //$livro->isbn = $request->isbn;
        //$livro->save();
        $validated = $request->validated();
        $livro = LivroTapia::create($validated);
        //$livro = Livro::create($request->all());

        return redirect("/livrostapia/{$livro->id}");
    }

    public function show(LivroTapia $livrostapium) {
    //public function show($isbn) {
        // $livro = LivroTapia::Where('isbn', $isbn)->first();        
        return view('livrotapia.show', [
            'livro' => $livrostapium,
        ]);
    }

    //public function update(Request $request, LivroTapia $livrostapium)
    public function update(LivroTapiaRequest $request, LivroTapia $livrostapium)    
    {
        // $request->validate([
        //     'titulo' => 'required',
        //     'autor' => 'required',
        //     'isbn' => 'required|integer',
        // ]);

        // $livrostapium->titulo = $request->titulo;
        // $livrostapium->autor = $request->autor;
        // $livrostapium->isbn = $request->isbn;
        // $livrostapium->save();
        
        $validated = $request->validated();
        $livrostapium->update($validated);
        request()->session()->flash('alert-info','Livro atualizado com sucesso');

        // $livro->update($request->all());
        return redirect("/livrostapia/{$livrostapium->id}");
    }

    public function destroy(LivroTapia $livrostapium)
    {
        $livrostapium->delete();
        return redirect('/livrostapia');
    }
}
