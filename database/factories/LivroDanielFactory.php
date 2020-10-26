<?php

namespace Database\Factories;

use App\Models\LivroDaniel;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroDanielFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivroDaniel::class;

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
            'user_id' => \App\Models\User::factory()->create()->id,
        ];
    }
}
