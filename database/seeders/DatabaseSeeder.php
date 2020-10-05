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
            LivroSaotomeSeeder::class,
            LivroGabrielaSeeder::class,
            LivroMarisaSeeder::class,
            LivroVictorSeeder::class,
            LivroricardoSeeder::class,
            LivroMarisaSeeder::class,
            LivroLauSeeder::class,
            LivroFabioFDRPSeeder::class,
        ]);
    }
}
