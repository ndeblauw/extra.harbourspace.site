<?php

namespace Database\Factories;

use App\Models\ProductType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProductType>
 */
class ProductTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word, // Generates a random word
            'price_in_cents' => $this->faker->numberBetween(100, 10000),
            'time_unit' => $this->faker->randomElement(['y', 'm', 'h']),
        ];
    }
}
