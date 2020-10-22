<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroCelso;

class LivroCelsoSeeder extends Seeder
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
        ];
        LivroCelso::create($livro);
        LivroCelso::factory(100)->create();
    }
}
