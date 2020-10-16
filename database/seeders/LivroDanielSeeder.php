<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LivroDanielSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livroDaniel = [
            'titulo' => 'Meu primeiro Livro',
            'autor' => 'Daniel Picon',
            'isbn' => '1234567891234'
        ];
        LivroDaniel::create($livroDaniel);
        LivroDaniel::factory(100)->create();
    }

}
