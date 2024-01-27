<?php

namespace Database\Factories;

use App\Models\ProductType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProductType>
 */
class ProductTypeFactory extends Factory
{
    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'price_in_cents' => $this->faker->numberBetween(5, 100)*100,
            'time_unit' => $this->faker->randomElement(['y', 'm', 'h']),
        ];
    }
}
