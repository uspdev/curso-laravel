<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LivroPriscilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => "Capitães de Areia",
            'autor'  => "Jorge Amado",
            'isbn'   => "978853593386"
        ];
        \App\Models\LivroPriscila::create($livro);
        \App\Models\LivroPriscila::factory(110)->create();
    }
}
