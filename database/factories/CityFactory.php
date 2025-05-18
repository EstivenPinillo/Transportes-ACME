<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country_id' => fake()->numberBetween(1,3),
            'name' => fake()->text(100),
            'state' => fake()->text(100),
            'postal_code' => fake()->randomNumber(7, true),
        ];
    }
}
