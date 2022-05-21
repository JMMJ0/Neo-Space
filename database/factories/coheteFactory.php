<?php

namespace Database\Factories;

use App\Models\compania;
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
            'company'=>$this->faker->randomElement(compania::all())['id'],
            'descripcion'=>$this->faker->realText($maxNbChars=100)
        ];
    }
}
