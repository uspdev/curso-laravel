<?php

namespace Database\Factories;

use App\Models\LivroLFloro;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroLFloroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivroLFloro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tipos = LivroLFloro::tipos();
        return [
            'titulo' => $this->faker->sentence(3),
            'autor' => $this->faker->name,
            'isbn' => $this->faker->ean13(),
            'user_id' => User::factory()->create()->id,
            'tipo' => $tipos[array_rand($tipos)],
        ];
    }
}
