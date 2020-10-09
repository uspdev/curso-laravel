<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroLFloro;

class LivroLFloroSeeder extends Seeder
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

        LivroLFloro::create($livro);
        LivroLFloro::factory(15)->create();
    }
}
