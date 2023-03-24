<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'image' => fake()->imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $grey = false),
            'registration_number' => fake()->phoneNumber(),
            'type' => fake()->text($maxNbChars = 10),
            'brand' => fake()->text($maxNbChars = 10),
            'transmission' => fake()->text($maxNbChars = 10),
            'seats' => fake()->numberBetween($int1 = 2, $int2 = 9),
            'capacity' => fake()->numberBetween($int1 = 50, $int2 = 90),
            'price_per_day' => fake()->numberBetween($int1 = 500, $int2 = 900),
        ];
    }
}
