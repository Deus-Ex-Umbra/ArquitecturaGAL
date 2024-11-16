<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TipoHabitaciones;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habitaciones>
 */
class HabitacionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id_habitacion = TipoHabitaciones::inRandomOrder()->first()->id;
        return [
            'numero_habitacion' => $this->faker->numberBetween(1, 1000),
            'precio_por_noche' => $this->faker->randomFloat(2, 50, 500),
            'estado' => $this->faker->randomElement(['disponible', 'ocupado', 'mantenimiento']),
            'descripcion' => $this->faker->sentence(),
            'id_tipo_habitacion' => $id_habitacion
            //'id_tipo_habitacion' => 1
            //'id_tipo_habitacion' => 2
            //'id_tipo_habitacion' => 3
            //'id_tipo_habitacion' => 4
        ];
    }
}
