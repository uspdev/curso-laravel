<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroDenis;

class LivroDenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => "O portador do fogo",
            'autor'  => "Bernard Cornwell",
            'isbn'       => "9788501109507"
        ];
        LivroDenis::create($livro);
        LivroDenis::factory(15)->create();
    }
}
