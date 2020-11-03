<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroWBM;
use App\Http\Requests\LivroWillEERequest;
class LivroWillEEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroWBM::all();
        return view('livrowillEE.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livrowillEE.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivroWillEERequest $request)
    {
        $validated = $request->validated();
        $livro = LivroWBM::create($validated);

        return redirect("/livros_willEE/$livro->id");
        // $livro = new LivroWBM;
        // $livro->titulo  = $request->titulo;
        // $livro->autor   = $request->autor;
        // $livro->isbn    = $request->isbn;
        // $livro->save();

        // //return redirect("/livros_willEE/{$livro->id}");
        // return redirect("/livros_willEE");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $isbn
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = LivroWBM::where('id',$id)->first();
        return view ('livrowillEE.show',compact('livro'));
                
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = LivroWBM::where('id',$id)->first();
        //dd($livro);
        return view('livrowillEE.edit',compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id No caso aqui é de livros.. meu controller não está identico ao do Thiago não usei o --all no artisan
     * @return \Illuminate\Http\Response
     */
    public function update(LivroWillEERequest $request, LivroWBM $livro)
    {
        //dd($livro);
        $validated = $request->validated();
        $livro->update($validated);
        // $livro = LivroWBM::where('id',$id)->first();   //Capturo o livro de acordo com o ID   
        // dd($livro)  ;
        // $livro->titulo  = $request->titulo;
        // $livro->autor   = $request->autor;
        // $livro->isbn    = $request->isbn;
        // $livro->save();
        request()->session()->flash('alert-info','Livro Atualizado com Sucesso');
        //return redirect("/livros_willEE/{$livro->id}");
        return redirect("/livros_willEE");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = LivroWBM::where('id',$id)->first();   //Capturo o livro de acordo com o ID
        $livro->delete();
        return redirect("/livros_willEE");
    }
}
