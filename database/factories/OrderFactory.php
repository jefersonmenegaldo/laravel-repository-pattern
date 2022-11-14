<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $total = $this->faker->numerify();
        return [
            'total' => $total,
            'subtotal' => $total,
            'tax' => rand(0, $total),
            'client_name' => $this->faker->name(),
            'finished' => $this->faker->boolean(),
        ];
    }
}
