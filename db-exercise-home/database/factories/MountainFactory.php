<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MountainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->unique()->name(),
            'name' => fake()->unique()->firstName(),
            'height' => fake()->numberBetween(1000, 9000),
            'belongsToRange' => fake()->boolean(),
            'firstClimbDate' => fake()->date(),
            'continent' => fake()->randomElement(['Afrika', 'Asia', 'Europe', 'America', 'Oceania']),
        ];
    }
}
