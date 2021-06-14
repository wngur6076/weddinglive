<?php

namespace Database\Factories;

use App\Models\Groom;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Groom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Testing Groom',
            'phone_number' => $this->faker->tollFreePhoneNumber,
            'bank_name' => '카카오뱅크',
            'account_number' => $this->faker->bankAccountNumber,
        ];
    }
}