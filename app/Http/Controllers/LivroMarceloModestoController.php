<?php

namespace App\Http\Controllers;

use App\Models\LivroMarceloModesto;
use Illuminate\Http\Request;

class LivroMarceloModestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livrosMarceloModesto = LivroMarceloModesto::all();
        return view('livros_marcelomodesto.index',[ 'livrosMarceloModesto' => $livrosMarceloModesto]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros_marcelomodesto.create',[
            'livroMarceloModesto' => new LivroMarceloModesto,
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

        $livroMarceloModesto = new LivroMarceloModesto;
        $livroMarceloModesto->titulo = $request->titulo;
        $livroMarceloModesto->autor = $request->autor;
        $livroMarceloModesto->isbn = $request->isbn;
        $livroMarceloModesto->save();
        return redirect("/livros_marcelomodesto/{$livroMarceloModesto->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivroMarceloModesto  $livroMarceloModesto
     * @return \Illuminate\Http\Response
     */
    public function show(LivroMarceloModesto $livros_marcelomodesto)
    {



             return view('livros_marcelomodesto.show',[
            'livroMarceloModesto' => $livros_marcelomodesto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivroMarceloModesto  $livroMarceloModesto
     * @return \Illuminate\Http\Response
     */
    public function edit(LivroMarceloModesto $livros_marcelomodesto)
    {
  
        return view('livros_marcelomodesto.edit',[
            'livroMarceloModesto' => $livros_marcelomodesto
        ]);

  

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivroMarceloModesto  $livroMarceloModesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivroMarceloModesto $livros_marcelomodesto)
    {
        $livros_marcelomodesto->titulo = $request->titulo;
        $livros_marcelomodesto->autor = $request->autor;
        $livros_marcelomodesto->isbn = $request->isbn;
        $livros_marcelomodesto->save();
        return redirect("/livros_marcelomodesto");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivroMarceloModesto  $livroMarceloModesto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livroMarceloModesto = LivroMarceloModesto::where('id',$id)->first();
        $livroMarceloModesto->delete();
        return redirect('/livros_marcelomodesto');

    }





}
