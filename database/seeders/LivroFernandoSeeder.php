<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Livrofernando;

class LivroFernandoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => 'Quincas Borba',
            'autor' => 'Machado de Assis',
            'isbn' => '9780195106817'
        ];
        Livrofernando::create($livro);
        Livrofernando::factory(10)->create();
    }
}
