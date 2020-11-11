<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroTapia;

class LivroTapiaSeeder extends Seeder
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
            'isbn'       => "9780195106817"
        ];
        \App\Models\LivroTapia::create($livro);
        \App\Models\LivroTapia::factory(20)->create();
    }
}
