<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroLFloro;
use App\Models\User;

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
            'isbn' => "9780195106817",
            'user_id' => 1,
            'tipo' => 'Nacional',
        ];

        LivroLFloro::create($livro);
        LivroLFloro::factory(10)->create();
    }
}
