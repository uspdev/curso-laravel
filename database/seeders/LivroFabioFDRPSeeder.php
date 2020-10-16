<?php

namespace Database\Seeders;

use App\Models\LivroFabioFDRP;
use Illuminate\Database\Seeder;

class LivroFabioFDRPSeeder extends Seeder
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
        LivroFabioFDRP::create($livro);
        LivroFabioFDRP::factory(10)->create();
    }
}
