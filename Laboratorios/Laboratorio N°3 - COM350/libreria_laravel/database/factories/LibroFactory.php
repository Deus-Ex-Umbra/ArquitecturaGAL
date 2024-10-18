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
    //protected $fillable = ['titulo', 'edicion', 'pais', 'precio', 'editorial_id'];
    public function definition(): array
    {
        $editorial_id = Editorial::inRandomOrder()->first()->id;
        return [
            'titulo' => $this->faker->sentence(3),
            'edicion' => $this->faker->numberBetween(1, 20),
            'pais' => $this->faker->country,
            'precio' => $this->faker->randomFloat(2, 10, 100),
            'editorial_id' => $editorial_id    
        ];
    }
}
