<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => "Quincas Borba",
            'autor'  => "Machado de Assis",
            'isbn'   => "9780195106817"
        ];
        \App\Models\Livro::create($livro);
        \App\Models\Livro::factory(15)->create();
    }
}
