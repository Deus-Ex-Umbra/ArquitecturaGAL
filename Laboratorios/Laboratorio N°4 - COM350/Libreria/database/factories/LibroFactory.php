<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Editorial;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id_editorial = Editorial::inRandomOrder()->first()->id;
        return [
            'titulo' => $this->faker->name(),
            'edicion' => $this->faker->numberBetween(1, 100),
            'pais' => $this->faker->name(),
            'precio' => $this->faker->randomFloat(2, 0, 1000),
            'editorial_id' => $id_editorial
        ];
    }
}
