<?php

namespace App\Http\Controllers;

use App\Models\LivroMarceloDaudt;
use Illuminate\Http\Request;
use App\Http\Requests\LivroRequestMarceloDaudt;

class LivroMarceloDaudtController extends Controller
{

    public function index()
    {
        $livros = LivroMarceloDaudt::all();
        return view('livros_marcelo_daudt.index',[
            'livros' => $livros
        ]);
    }

    public function create()
    {
        return view('livros_marcelo_daudt.create',[
            'livro' => new LivroMarceloDaudt,
        ]);
    }

    public function store(LivroRequestMarceloDaudt $request)
    {
        $validated = $request->validated();
        $livro = LivroMarceloDaudt::create($validated);
        request()->session()->flash('alert-info','Livro cadastrado com sucesso');
        return redirect("/livrosMarceloDaudt/{$livro->id}");
    }

    public function show($id)
    {
        $livro = LivroMarceloDaudt::where('id',$id)->first();
        return view('livros_marcelo_daudt.show',[
            'livro' => $livro,
        ]);
    }

    public function edit(LivroMarceloDaudt $livrosMarceloDaudt)
    {
        return view('livros_marcelo_daudt.edit',[
            'livro' => $livrosMarceloDaudt
        ]);
    }

    public function update(LivroRequestMarceloDaudt $request, LivroMarceloDaudt $livrosMarceloDaudt)
    {
        $validated = $request->validated();
        $livrosMarceloDaudt->update($validated);
        request()->session()->flash('alert-info','Livro atualizado com sucesso');
        return redirect("/livrosMarceloDaudt/{$livrosMarceloDaudt->id}");
    }

    public function destroy(LivroMarceloDaudt $livrosMarceloDaudt)
    {
        $livrosMarceloDaudt->delete();
        return redirect('/livrosMarceloDaudt');
    }
}
