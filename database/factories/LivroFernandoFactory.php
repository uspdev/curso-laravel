<?php

namespace Database\Factories;

use App\Models\LivroFernando;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroFernandoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivroFernando::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'autor' => $this->faker->name,
            'isbn' => $this->faker->ean13(),
            'user_id' => User::factory()->create()->id
        ];
    }
}
