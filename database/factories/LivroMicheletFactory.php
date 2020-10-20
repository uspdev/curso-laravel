<?php

namespace Database\Factories;

use App\Models\LivroMichelet;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroMicheletFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivroMichelet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'autor'  => $this->faker->name,
            'isbn'   => $this->faker->ean13(),
        ];
    }
}
