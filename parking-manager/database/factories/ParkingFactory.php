<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ParkingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'plate' => fake()->regexify('[0-9]{4}[A-Z]{3}'),
            'brand' => fake()->word(),
            'model' => fake()->word(),
        ];
    }
}
