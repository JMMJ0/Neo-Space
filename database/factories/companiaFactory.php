<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\compania>
 */
class companiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name(),
            'direccion'=> $this->faker->address(),
            'telefono' =>$this->faker->e164PhoneNumber(),
            'descripcion'=> $this->faker->realText($maxNbChars = 100, $indexSize = 2)
        ];
    }
}
