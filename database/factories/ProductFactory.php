<?php

namespace Database\Factories;

use App\Models\ProductType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'product_type_id' => ProductType::factory(),
            'name' => $this->faker->name,
            'price_in_cents' => $this->faker->randomNumber(4),
            'description' => $this->faker->text,
        ];
    }
}
