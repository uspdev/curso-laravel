<?php

namespace Database\Factories;

use App\Models\Livro;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo'  => $this->faker->sentence(3),
            'isbn'    => $this->faker->ean13(),
            'autor'   => $this->faker->name,
            'user_id' => User::factory()->create()->id

        ];
    }
}
