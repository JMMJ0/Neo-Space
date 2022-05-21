<?php

namespace Database\Factories;

use App\Models\planeta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\viaje>
 */
class viajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'punto_salida'=> $this->faker->city(),
            'punto_destino'=> $this->faker->randomElement(planeta::all())['id'],
            'hora'=> $this->faker->time(),
            'fecha'=> $this->faker->date()
        ];
    }
}
