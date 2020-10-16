<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroRicardo;

class LivroRicardoSeeder extends Seeder
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
        LivroRicardo::create($livro);
        LivroRicardo::factory(20)->create();
    }
}
