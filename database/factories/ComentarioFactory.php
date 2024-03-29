<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comentario' => fake()->sentence(), //Alternativa $this->faker->etc()
            'ciudad' => fake()->randomElement(['Guadalajara', 'Tonalá', 'CDMX'])
        ];
    }
}
