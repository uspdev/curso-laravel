<?php

namespace Database\Factories;

use App\Models\LivroFabioFDRP;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroFabioFDRPFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivroFabioFDRP::class;

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
            'autor'  => $this->faker->name
        ];
    }
}
