<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'type' => $this->faker->word(),
            'price' => $this->faker->numberBetween(10000, 900000),
            'size' => $this->faker->randomElement([
                'S', 'M', 'L', 'XL'
            ])
        ];
    }
}
