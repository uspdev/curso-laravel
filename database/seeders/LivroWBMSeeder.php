<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroWBM;

class LivroWBMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livroWBM = [
            'titulo' => "As Viagens de Gulliver",
            'autor'  => "Jonathan Swift",
            'isbn'   => "99999999999999"
        ];
        LivroWBM::create($livroWBM);
        LivroWBM::factory(100)->create();
    }
}
