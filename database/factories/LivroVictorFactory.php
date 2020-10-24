<?php

namespace Database\Factories;

use App\Models\LivroVictor;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class LivroVictorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivroVictor::class;

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
            'user_id' => User::factory()->create()->id,
        ];
    }
}
