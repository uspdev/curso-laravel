<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroAndre;

class LivroAndreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$livro = [
			'titulo' => "Além do Bem e do Mal",
			'autor' => "Friedrich Nietzsche",
			'isbn' => "9788535906417",
		];
		LivroAndre::create($livro);
		LivroAndre::factory(100)->create();

    }
}
