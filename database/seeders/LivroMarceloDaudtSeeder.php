<?php

namespace Database\Seeders;

use App\Models\LivroMarceloDaudt;
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
        LivroMarceloDaudt::create($livro);
        LivroMarceloDaudt::factory(100)->create();
    }
}
