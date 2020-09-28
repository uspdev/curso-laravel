<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroVictor;

class LivroVictorSeeder extends Seeder
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
        LivroVictor::create($livro);
        LivroVictor::factory(150)->create();
    }
}
