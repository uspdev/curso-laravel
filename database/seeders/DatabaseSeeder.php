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
            # Vou deixar comentando para não quebrar a migration de quem ainda não chegou na aula do replicado
            #UserSeeder::class,
            #LivroSeeder::class,
            #LivroRicardoSeeder::class,
            LivroMicheletSeeder::class,
            LivroLeonardoSeeder::class,
            LivroSaotomeSeeder::class,
            LivroGabrielaSeeder::class,
            LivroMarisaSeeder::class,
            LivroVictorSeeder::class,
            LivroMarisaSeeder::class,
            LivroCelsoSeeder::class,
            LivroMarisaSeeder::class,
            LivroLauSeeder::class,
            LivroFabioFDRPSeeder::class,
			      LivroAndreSeeder::class,
            LivromasakikSeeder::class,
            LivroMarceloDaudtSeeder::class,
            LivroLFloroSeeder::class,
            LivroEbonilhaSeeder::class,
            LivroFernandoSeeder::class,
            LivroWillSeeder::class,
            LivroAlessandroOliveiraSeeder::class,
            LivroDenisSeeder::class,
            LivroGroffSeeder::class,
            LivroAlessandroOliveiraSeeder::class,
            LivroTapiaSeeder::class
        ]);
    }
}
