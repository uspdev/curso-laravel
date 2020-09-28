<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Livroricardo;

class LivroricardoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => "Da divisão do trabalho social",
            'autor'  => "Emile Durkheim",
            'isbn'   => "8546902488"
        ];
        Livroricardo::create($livro);
        Livroricardo::factory(100)->create();
    }
}
