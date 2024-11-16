<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TipoHabitaciones>
 */
class TipoHabitacionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->randomElement(['Simple', 'Doble', 'Triple', 'Matrimonio']),
            //'nombre' => 'Simple',
            //'nombre' => 'Doble',
            //'nombre' => 'Triple',
            //'nombre' => 'Matrimonio',
            'descripcion' => $this->faker->sentence(),
            'precio' => $this->faker->randomFloat(2, 50, 500)
        ];
    }
}
