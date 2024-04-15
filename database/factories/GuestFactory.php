<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'is_child' => fake()->boolean(),
            'is_lactose_free' => fake()->boolean(),
            'is_gluten_free' => fake()->boolean(),
            'is_vegetarian' => fake()->boolean(),
            'is_vegan' => fake()->boolean(),
            'is_participated' => fake()->boolean(),
            'notes' => fake()->realTextBetween(5, 10),
        ];
    }
}
