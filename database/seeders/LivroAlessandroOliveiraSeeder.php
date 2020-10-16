<?php

namespace Database\Seeders;

use App\Models\LivroAlessandroOliveira;
use Illuminate\Database\Seeder;

class LivroAlessandroOliveiraSeeder extends Seeder
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
        LivroAlessandroOliveira::create($livro);
        LivroAlessandroOliveira::factory(15)->create();
    }
}
