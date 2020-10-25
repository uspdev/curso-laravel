<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroVictor;
use App\Models\User;
class LivroVictorSeeder extends Seeder
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
            'isbn'   => "9780195106817",
            'user_id' => User::factory()->create()->id,
        ];
        LivroVictor::create($livro);
        LivroVictor::factory(15)->create();
    }
}
