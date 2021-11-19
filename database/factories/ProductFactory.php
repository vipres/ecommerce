<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(2);
        return [
            'name' => $name,
            'slug',
            'description',
            'price',
            'subcategory_id',
            'brand_id',
            'status',
            'quantity',
        ];
    }
}
