<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroSaotome;
use App\Models\User;

class LivroSaotomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livroSaotome = [
            'titulo' => "Crime e Castigo",
            'autor'  => "Fiódor Dostoiéviski",
            'isbn'   => "9780075535744"
        ];
        LivroSaotome::create($livroSaotome);
        LivroSaotome::factory(10)->create();
    }
}