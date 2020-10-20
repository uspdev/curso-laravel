<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroGroff;

class LivroGroffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => "Claro Enigma",
            'autor'  => "Carlos Drummond de Andrade",
            'isbn'   => "9788501018458"
        ];
        LivroGroff::create($livro);
        LivroGroff::factory(100)->create();
    }
}
