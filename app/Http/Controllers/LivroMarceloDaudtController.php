<?php

namespace App\Http\Controllers;

use App\Models\LivroMarceloDaudt;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $livro = new LivroMarceloDaudt;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect("/livrosMarceloDaudt/{$livro->id}");
    }

//   public function show(LivroMarceloDaudt $livro)
//    {
//        return view('livros_marcelo_daudt.show',[
//            'livro' => $livro
//        ]);
//   }

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

    public function update(Request $request, LivroMarceloDaudt $livrosMarceloDaudt)
    {
        $livrosMarceloDaudt->titulo = $request->titulo;
        $livrosMarceloDaudt->autor = $request->autor;
        $livrosMarceloDaudt->isbn = $request->isbn;
        $livrosMarceloDaudt->save();
        return redirect("/livrosMarceloDaudt/{$livrosMarceloDaudt->id}");
    }

    public function destroy(LivroMarceloDaudt $livrosMarceloDaudt)
    {
        $livrosMarceloDaudt->delete();
        return redirect('/livrosMarceloDaudt');
    }
}
