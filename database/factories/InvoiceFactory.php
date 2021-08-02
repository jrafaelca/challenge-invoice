<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'      => $this->faker->randomElement(['ticket', 'invoice']),
            'user_id'   => \App\Models\User::all()->random()->id,
            'seller_id' => \App\Models\User::all()->random()->id,
        ];
    }
}
