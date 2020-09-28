<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Livrolau;

class LivrolauSeeder extends Seeder
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
        ];

        Livrolau::create($livro);
        Livrolau::factory(150)->create();
    }
}
