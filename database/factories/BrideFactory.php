<?php

namespace Database\Factories;

use App\Models\Bride;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrideFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bride::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Testing Bride',
            'phone_number' => $this->faker->tollFreePhoneNumber,
            'bank_name' => '카카오뱅크',
            'account_number' => $this->faker->bankAccountNumber,
        ];
    }
}