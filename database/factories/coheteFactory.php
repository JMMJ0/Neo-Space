<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cohete>
 */
class coheteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'modelo'=>$this->faker->numberBetween($int = 0, $int2 = 100),
            'marca'=> $this->faker->randomElement(['Space X','Discover Y']),
            'descripcion'=>$this->faker->realText($maxNbChars=100)
        ];
    }
}
