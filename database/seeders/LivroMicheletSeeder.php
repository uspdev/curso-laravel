<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroMichelet;

class LivroMicheletSeeder extends Seeder
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
        LivroMichelet::create($livro);
        LivroMichelet::factory(100)->create();
    }
}
