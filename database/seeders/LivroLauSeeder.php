<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroLau;

class LivroLauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => 'A Vida Secreta das Árvores',
            'autor'  => 'Peter Wohlleben',
            'isbn'   => '9788543104652',
            'tipo'   => 'Livro',
        ];

        LivroLau::create($livro);
        LivroLau::factory(10)->create();
    }
}
