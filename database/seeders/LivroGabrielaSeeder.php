<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroGabriela;

class LivroGabrielaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livrogabriela = [
                'titulo' => "Quincas Borba",
                'autor'  => "Machado de Assis",
                'isbn'   => "9780195106817"
        ];
        LivroGabriela::create($livrogabriela);
        LivroGabriela::factory(100)->create();
    }
}
