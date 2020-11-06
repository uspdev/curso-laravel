<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LivroMarceloModestoSeeder extends Seeder
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
        \App\Models\LivroMarceloModesto::create($livro);
        \App\Models\LivroMarceloModesto::factory(15)->create();
    }
}
