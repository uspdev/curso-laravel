<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroSaotome;

class LivroSaotomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => "Crime e Castigo",
            'autor'  => "Fiódor Dostoiéviski",
            'isbn'   => "9780075535744"
        ];
        LivroSaotome::create($livro);
        LivroSaotome::factory(150)->create();
    }
}