<?php

namespace Database\Factories;

use App\Models\LivroWill;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroWillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivroWill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->realText(),
            'autor' => $this->faker->name,
            'isbn' => $this->faker->isbn13()
        ];
    }
}
