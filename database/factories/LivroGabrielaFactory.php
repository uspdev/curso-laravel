<?php

namespace Database\Factories;

use App\Models\LivroGabriela;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


class LivroGabrielaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivroGabriela::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'isbn'   => $this->faker->ean13(),
            'autor'  => $this->faker->name,
            'user_id' => User::factory()->create()->id
        ];
    }
}
