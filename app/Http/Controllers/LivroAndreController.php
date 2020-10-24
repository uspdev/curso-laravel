<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroAndre;

class LivroAndreController extends Controller
{
	public function index(){
		$livros = LivroAndre::all();
		return view('livrosandre.index',[
			'livros' => $livros
		]);
	}
	public function show($isbn){
		$livro = LivroAndre::where('isbn', $isbn) -> first();
		return view('livrosandre.show', [
			'livro' => $livro,
		]);
	}
}
