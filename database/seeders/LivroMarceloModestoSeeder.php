<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroMarceloModesto;

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
        LivroMarceloModesto::create($livro);
        LivroMarceloModesto::factory(100)->create();
    }
}
