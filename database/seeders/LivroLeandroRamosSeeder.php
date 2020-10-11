<?php

namespace Database\Seeders;

use App\Models\LivroLeandroRamos;
use Illuminate\Database\Seeder;

class LivroLeandroRamosSeeder extends Seeder
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
        LivroLeandroRamos::create($livro);
        LivroLeandroRamos::factory(20)->create();
    }
}
