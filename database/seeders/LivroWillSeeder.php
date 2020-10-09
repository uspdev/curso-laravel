<?php

namespace Database\Seeders;

use App\Models\LivroWill;
use Illuminate\Database\Seeder;

class LivroWillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => 'Calculus',
            'autor' => 'Michael Spivak',
            'isbn' => '9780914098911'
        ];
        LivroWill::create($livro);
        LivroWill::factory(13)->create();
    }
}
