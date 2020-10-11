<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivroEbonilha;

class LivroEbonilhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => "Desenvolvendo com Laravel: Um framework para a construção de aplicativos PHP modernos",
            'autor'  => "Matt Stauffer",
            'isbn'       => "9788575227718"
        ];
        LivroEbonilha::create($livro);
        LivroEbonilha::factory(20)->create();
    }
}
