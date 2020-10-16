<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LivromasakikSeeder extends Seeder
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
            'autor' => "Machado de Assis",
            'isbn' => "9780195106817",
        ];
        \App\Models\Livromasakik::create($livro);
        \App\Models\Livromasakik::factory(15)->create();
    }
}
