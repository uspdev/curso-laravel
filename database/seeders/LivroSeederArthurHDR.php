<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Livro_9793951;

class LivroSeederArthurHDR extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
        'titulo' => 'Universo em Desencanto',
        'autor' => 'Tim Maia',
        'isbn' => '0000000000000'        
        ];
        Livro_9793951::create($livro);
        Livro_9793951::factory(10)->create();
    }
}
