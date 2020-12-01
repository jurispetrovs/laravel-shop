<?php

namespace Database\Factories;

use App\Models\Delivery;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Delivery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'size' => $this->faker->randomElement([
                'S', 'M', 'L', 'XL'
            ]),
            'price' => $this->faker->numberBetween(100, 999)
        ];
    }
}
