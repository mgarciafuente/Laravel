<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'count' => $this->faker->randomDigit(),
            'price' => $this->faker->randomNumber(5, false), // not all 5 digits, true all 5 digits
            'description' => $this->faker->words(3, true), // string instead of an array with 3 words
        ];
    }
}
