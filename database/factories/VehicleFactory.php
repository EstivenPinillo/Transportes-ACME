<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'owner_id' => fake()->numberBetween(1,3),
            'license_plate' => fake()->randomNumber(7, true),
            'color' => fake()->hexColor(),
            'brand' => fake()->word(),
            'type' => fake()->randomKey(['private' =>1, 'public' =>2])
        ];
    }
}
