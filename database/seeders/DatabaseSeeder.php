<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            LivroSeeder::class,
            LivroLeonardoSeeder::class,
            LivroSaotomeSeeder::class,
            LivroGabrielaSeeder::class,
            LivroMarisaSeeder::class,
            LivroVictorSeeder::class,
            LivroRicardoSeeder::class,
            LivroMarisaSeeder::class,
            LivroLauSeeder::class,
            LivroFabioFDRPSeeder::class,
            LivromasakikSeeder::class,
            LivroMarceloDaudtSeeder::class,
            LivroLFloroSeeder::class,
            LivroEbonilhaSeeder::class,
            LivroFernandoSeeder::class,
            LivroWillSeeder::class,
            LivroAlessandroOliveiraSeeder::class,
        ]);
    }
}
