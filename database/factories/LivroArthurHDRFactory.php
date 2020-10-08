<?php

namespace Database\Factories;

use App\Models\Livro_9793951;
use Illuminate\Database\Eloquent\Factories\Factory;

class Livro_9793951Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livro_9793951::class;

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
            'isbn' => $this->faker->ean13()
        ];
    }
}
