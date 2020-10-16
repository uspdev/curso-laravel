<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LivroMarceloDaudtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo'    =>  "Quincas Borba",
            'autor'     =>  "Machado de Assis",
            'isbn'      =>  "9780195106817"
        ];
        \App\Models\LivroMarceloDaudt::create($livro);
        \App\Models\LivroMarceloDaudt::factory(15)->create();
    }
}
