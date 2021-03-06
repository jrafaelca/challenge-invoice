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
            'name'       => $this->faker->numerify('Product ###'),
            'quantity'   => $this->faker->randomNumber(2),
            'price'      => $this->faker->randomNumber(3),
            'invoice_id' => \App\Models\Invoice::all()->random()->id,
        ];
    }
}
