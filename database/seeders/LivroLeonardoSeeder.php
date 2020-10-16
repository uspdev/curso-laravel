<?php

namespace Database\Seeders;

use App\Models\LivroLeonardo;
use Illuminate\Database\Seeder;

class LivroLeonardoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => 'Título 1',
            'autor' => 'Autor 1',
            'isbn' => '8535902775',
        ];

        LivroLeonardo::create($livro);
        LivroLeonardo::factory(10)->create();
    }
}
