<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_type_id' => '1',
            'name' => $this->faker->name,
            'price_in_cents' => $this->faker->randomNumber(4),
            'description' => $this->faker->text,
        ];
    }
}
