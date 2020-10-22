<?php

namespace Database\Factories;

use App\Models\LivroGroff;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroGroffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivroGroff::class;

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

        ];
    }
}
