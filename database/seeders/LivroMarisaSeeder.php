<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroMarisa;

class LivroMarisaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livromarisa = [
            'titulo' => "Bárbara Carine Soares Pinheiro & Katemari Rosa (Orgs.)",
            'autor'  => "Descolonizando Saberes",
            'isbn'   => "9788578615604"
        ];
        LivroMarisa::create($livromarisa);
        LivroMarisa::factory(100)->create();
    }
}
