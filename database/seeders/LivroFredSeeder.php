<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroFred;
class LivroFredSeeder extends Seeder
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
            'isbn' => "9780195106817"
        ];
        LivroFred::create($livro);
        LivroFred::factory(100)->create();
    }
}
